<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadDocument(Request $request)
    {
        $request->validate([
            'id_crew' => 'required|integer',
            'document_name' => 'required|string|max:255',
            'document_number' => 'required|string|max:255',
            'issued_date' => 'required|date',
            'expiry_date' => 'nullable|date',
            'file_path' => 'required|file|max:10240', // Adjust the max file size as needed
        ]);

        // Save the file
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filePath = $file->store('documents');

            // Create a new document record in the database
            $document = Document::create([
                'id_crew' => $request->input('id_crew'),
                'document_name' => $request->input('document_name'),
                'document_number' => $request->input('document_number'),
                'issued_date' => $request->input('issued_date'),
                'expiry_date' => $request->input('expiry_date'),
                'file_path' => $filePath,
            ]);

            return response()->json(['message' => 'Document uploaded successfully', 'document' => $request], 201); 
        }
        return response()->json(['message' => 'Upload error', 'document' => $request], 404); 
        // return response()->json(['message' => 'Document uploaded successfully'], 201);

    }
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
