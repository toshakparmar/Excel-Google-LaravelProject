<?php

namespace App\Http\Controllers;

use App\Exports\filedataexport;
use App\Imports\filedataImport;
use App\Models\File;
use App\Models\FileData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;

class Filecontroller extends Controller
{
    public function importfile(Request $request ){
        //Vaildate the File..
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,xlsx,pdf,doc,docx'
            ]);

            // Upload the User Given File in to Database..
            File::truncate();
            $fileModel = new File;
            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = $request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
              
            //Upload a File & Insert the File Data into Database.. 
            FileData::truncate();
            $file = $request->file('file');
            Excel::import(new filedataImport,$file);
    
            //Send the Email with File Attachment..
            $data = [
                        'name' => 'Toshak Parmar',
                        'email' => 'toshakparmar2000@gmail.com'
                    ];
            Mail::send('mailtemp', $data, function ($message) {
            $id = "1";
            $filedata = File::find($id);
            $message->to('toshakparmar2000@gmail.com', 'Toshak Parmar')->subject('Sent User Uploaded File to Review the File Content..');
            $message->attach(public_path('/storage/uploads/'.$filedata->name));
        });
        return back()->with('status', 'The File has been Saved as well as File Data has been Imported into Database && This File has Sent to Admin-Email');
    }
    public function showimportedfilerecords(){
        $data = FileData::all();
        return view('showrecords')->with(compact('data'));
    }

    public function ExportFile()
    {
        return Excel::download(new filedataexport, 'TenThousandRecords.xlsx');
        return back()->with('status', 'File has been downloaded');
    }
}
