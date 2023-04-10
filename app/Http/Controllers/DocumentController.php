<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

/**
 * Document 
 */
class DocumentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // data 
        $documents = Document::all()->paginate(8);
        
        // pages for pagination 
        $nb_pages = $documents->last_page();
        
        // render 
        return view(
            'document.index', [
                'documents' => $documents, 
                'nb_pages' => $nb_pages, 
            ]
        );
    }

    /**
     * Display a listing of the resource by user.
     *
     * @return \Illuminate\Http\Response
     */
    public function myDocuments() {
        // data 
        $documents = Document::whereBelongsTo($student)->get();
        
        // render 
        return view(
            'document.byuser', [
                'documents' => $documents, 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // render 
        return view(
            'document.create', 
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // validate 
        $request->validate( [
            Rule::unique('documents')->ignore($request->id, 'id'), 
            'name' => 'required|min:2|max:50', 
            'name_en' => 'min:2|max:50', 
            'file' => 'required|max:255', 
            'file_en' => 'max:255', 
            'description' => 'required', 
            'description_en' => '', 
            'type' => 'required|max:30', 
            'type_en' => 'max:30', 
        ] );
        
        // format 
        $document = new Document;
        $document->fill($request->all());
        $document->size = $size;
        $document->extension = $extension;
        // $document->student_id = Auth::id();
        
        // save 
        $document->save();
        
        // redirect 
        return redirect(
            route('document.show', $document->id)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document) {
        // render 
        return view(
            'document.show', [
                'document' => $document, 
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document) {
        // render 
        return view(
            'document.edit', [
                'document' => $document, 
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document) {
        // validate 
        $request->validate( [
            Rule::unique('documents')->ignore($request->id, 'id'), 
            'name' => 'required|min:2|max:50', 
            'name_en' => 'min:2|max:50', 
            'file' => 'required|max:255', 
            'file_en' => 'max:255', 
            'description' => 'required', 
            'description_en' => '', 
            'type' => 'required|max:30', 
            'type_en' => 'max:30', 
        ] );
        
        // format 
        $document->fill($request->all());
        $document->size = $size;
        $document->extension = $extension;
        
        // save 
        $document->save();
        
        // redirect 
        return redirect(
            route('document.show', $document->id)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document) {
        // delete 
        $document->delete();
        
        // redirect 
        return redirect(
            route('document')
        );
    }
}
