<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Mailgun\Mailgun;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(10);
        return view("admin.contact.index", compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function sendM(){
        // Bien sûr, voici les étapes à suivre pour créer un projet Laravel qui reçoit des e-mails via un formulaire 
        // de contact par Mailgun:
        // 1. Installer Laravel en utilisant composer composer create-project --prefer-dist laravel/laravel nom_projet 
        // 2. Installer Mailgun en utilisant composer composer require guzzlehttp/guzzle mailgun/mailgun-php illuminate/mail 
        // 3. Créer un compte Mailgun Allez sur le site https://www.mailgun.com/ et créez un compte. 
        // Suivez les instructions pour valider votre compte.
        // 4. Configurer les variables d'environnement
        // Créez un fichier .env (si vous n'en avez pas déjà un) et ajoutez les variables suivantes : 
        // MAIL_DRIVER=mailgun
        // MAILGUN_DOMAIN=[nom de votre domaine Mailgun]
        // MAILGUN_SECRET=[clé secrète Mailgun]
        // MAIL_FROM_ADDRESS=[adresse email d'expédition] '''
        // 5. Créer un contrôleurCréez un contrôleur pour le formulaire de contact avec une méthode pour traiter l'envoi de l'e-mail. 
        // Voici un exemple de code de contrôleur : 
        // use Illuminate\Http\Request;
        // use Illuminate\Support\Facades\Mail;
        // class ContactController extends Controller{    
        //     public function send(Request $request){        
        //         $data = array(            
        //             'name' => $request->input('name'),            
        //             'email' => $request->input('email'),            
        //             'message' => $request->input('message')        
        //         );        
        //         Mail::send('emails.contact', $data, function($message) use ($data) {            
        //             $message->from(env('MAIL_FROM_ADDRESS'));            
        //             $message->to('[votre adresse email]')->subject('Nouveau message de contact');        
        //         });        
        //         return redirect()->back()->with('success', 'Votre message a été envoyé avec succès. Nous reviendrons vers vous dans les plus brefs délais.');    
        //     }
        // } 
        // L'envoi d'email est effectué par la méthode  Mail::send  en utilisant la vue  emails.contact  
        // et les données du formulaire de contact. 
        // Pour référence, voici l'exemple de la vue  emails.contact  :  '''
        // <p><strong>Nom:</strong> {{ $name }}</p>
        // <p><strong>Email:</strong> {{ $email }}</p>
        // <p><strong>Message:</strong> {{ $message }}</p> 
        // 6. Créer une vue pour le formulaire de contact Créez une vue pour le formulaire de contact en utilisant le code HTML suivant : 
        //     <form action="{{ route('contact.send') }}" method="POST">    
        //     {{ csrf_field() }}    
        //     <div class="form-group">        
        //     <label for="name">Nom:</label>        
        //     <input type="text" name="name" id="name" class="form-control" required>    
        //     </div>    
        //     <div class="form-group">        
        //     <label for="email">Email:</label>        
        //     <input type="email" name="email" id="email" class="form-control" required>    
        //     </div>    
        //     <div class="form-group">        
        //     <label for="message">Message:</label>        
        //     <textarea name="message" id="message" class="form-control" rows="5" required></textarea>    
        //     </div>    
        //     <button type="submit" class="btn btn-primary">Envoyer le message</button>
        //     </form> 
        //     7. Configurer les routesCréez
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        $contact = Contact::create($request->all());

        
        $data = array(
            'name' => $request->input('name'),            
            'email' => $request->input('email'),            
            'subject' => $request->input('subject'),            
            'message' => $request->input('message')        
        );        
       
        // Mail::send(['admin.contact.index', compact('data')], $data, function($message) use ($data) {            
        //     $message->from(env('MAIL_FROM_ADDRESS'));            
        //     $message->to('contact@lacolomberdc.com')->subject($data['subject']);        
        // });        

        // $contact = Contact::findOrFail($request->id);
        Mail::to('contact@lacolomberdc.com')->send(new ContactMail($contact));
        return redirect()->back()
            ->with('success', 'Votre message a été envoyé avec succès. Nous reviendrons vers vous dans les plus brefs délais.');    
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
