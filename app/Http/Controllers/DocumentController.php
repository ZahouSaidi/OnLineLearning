<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    // Affiche le formulaire de création
    public function create()
    {
        return view('documents.create');
    }

    // Enregistre un document
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:cours,examen',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Stocker le fichier et obtenir son chemin
        $filePath = $request->file('file')->store('documents', 'public');

        // Créer et enregistrer le document dans la base de données
        Document::create([
            'title' => $request->title,
            'type' => $request->type,
            'file_path' => $filePath,
        ]);

        $message = $request->type == 'cours' ? 'Cours ajouté avec succès.' : 'Examen ajouté avec succès.';

        return redirect()->back()->with('success', $message);
    }

    // Affiche tous les documents
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }
    

    // Affiche un document spécifique
    public function show(Document $document)
    {
        return response()->file(storage_path('app/public/' . $document->file_path));
    }
}

