<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Create room.

    public function create_room(Request $request)
    {
        $this->Validate($request, [
            'create_room_name' => 'required|max:50',
            'create_user_name' => 'required|max:50',
        ]);

        if($this->checkExistRoom($request->get('create_room_name'))) {
            return redirect()->route('index')->with('error', 'This room is exist');
        } else {
            $room = new Rooms([
                'name' => $request->get('create_room_name'),
                'user' => $request->get('create_user_name'),
            ]);

            if ($room->save()) {
                return redirect()->route('entered',[$request->get('create_room_name'),$request->get('create_user_name')]);
            } else {
                return redirect()->route('error');
            }
        }
    }

    // Check room exit.
    // If room is exit go to room.
    // If room is not exit to back to index page with error.

    public function enter(Request $request)
    {
        $this->Validate($request, [
            'room_name' => 'required|max:100',
        ]);

        if($this->checkExistRoom($request->get('room_name'))) {
            return redirect()->route('entered',[$request->get('room_name')]);
        } else {
            return redirect()->route('index')->with('error', 'This room doesn\'t exist');
        }
    }

    // Allow to get in room.

    public function entered($room_name, $user_name = null)
    {

        if($this->checkExistRoom($room_name)) {
            // Get room id.
            $room_data = Rooms::where('name',$room_name)->select('id', 'user', 'created_at')->get()->first();
            // Get links order from current.
            $links = Links::where('room_id',$room_data->getOriginal('id'))->orderBy('created_at', 'DESC')->get();
            // Get link quantity of links.
            $qt_link = Links::where('room_id',$room_data->getOriginal('id'))->count();
            // Return room page.
            return view('room', [
                'room_name' => strtoupper($room_name),
                'links' => $links,
                'qt_link' => $qt_link,
                'user_name'=> $user_name,
                'who_create_room' => $room_data->getOriginal('user'),
                'time_create_room' => $room_data->getOriginal('created_at'),
                ]);
        } else {
            return redirect()->route('index')->with('error', 'This room doesn\'t exist');
        }
    }

    // Recieve message and add to DB

    public function receive_message(Request $request)
    {
        $room_id = Rooms::where('name',$request->get('room_name'))->value('id');
        $link = new Links([
            'link' => $request->get('message'),
            'name' => $request->get('user_name'),
            'room_id' => $room_id,
        ]);
        $link->save();
        return response()->json(['1']);
    }

    // Recieve message and add to DB for mobile

    public function receive_message_mobile(Request $request)
    {
        $room_id = Rooms::where('name',$request->get('room_name'))->value('id');
        $link = new Links([
            'link' => $request->get('message'),
            'name' => $request->get('user_name'),
            'room_id' => $room_id,
        ]);
        $link->save();
        return redirect()->route('entered',[$request->get('room_name'),$request->get('user_name')]);
    }

    // Count quantity of message

    public function count_message(Request $request)
    {
        $room_id = Rooms::where('name',$request->get('room_name'))->value('id');
        $message_gt = Links::where('room_id',$room_id)->count();
        return response()->json([$message_gt]);
    }

    // Get message from DB

    public function sent_massage_back(Request $request) {
        $room_id = Rooms::where('name',$request->get('room_name'))->value('id');
        $message = Links::where('room_id',$room_id)
                        ->orderBy('created_at', 'DESC')
                        ->limit(50)
                        ->get();
        return response()->json($message);
    }

    // Check exist room ==================================================================================

    public function checkExistRoom($room_name)
    {
        $result = Rooms::where('name',$room_name)->first();
        if ($result != null) {
            return true;
        } else {
            return false;
        }
    }

}
