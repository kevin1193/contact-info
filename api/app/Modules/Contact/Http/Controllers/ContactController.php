<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/07/2018
 * Time: 10:47 AM
 */

namespace App\Modules\Contact\Http\Controllers;

use App\Essentials\Services\ApiResponse;
use App\Http\Controllers\Controller;
use App\Modules\Contact\Http\Requests\CreateContactRequest;
use App\Modules\Contact\Http\Requests\UpdateContactRequest;
use App\Modules\Contact\Http\Resources\Contact;
use App\Modules\Contact\Http\Resources\ContactCollection;
use App\Modules\Contact\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = ContactRepository::getOrPaginate();

        return ApiResponse::resource(new ContactCollection($contacts));
    }

    public function show(Request $request)
    {
        $contact = ContactRepository::findOrFail($request->contactId);

        return ApiResponse::resource(new Contact($contact));
    }

    public function store(CreateContactRequest $request)
    {
        $data = $request->only(
            'email',
            'first_name',
            'middle_name',
            'last_name',
            'phone',
            'country',
            'city',
            'state',
            'zip'
        );
        $contact = ContactRepository::create($data);

        return ApiResponse::resource((new Contact($contact))->additional(['message' => 'New contact created successfully!']));
    }

    public function update(UpdateContactRequest $request)
    {
        $data = $request->only(
            'email',
            'first_name',
            'middle_name',
            'last_name',
            'phone',
            'country',
            'city',
            'state',
            'zip'
        );
        $contact = ContactRepository::finOfFail($request->contactId);
        $contact->update($data);

        return ApiResponse::resource((new Contact($contact))->additional(['message' => 'Contact updated successfully!']));
    }

    public function destroy(Request $request)
    {
        $contact = ContactRepository::finOfFail($request->contactId);
        $contact->delete();

        return ApiResponse::responseOK('Contact deleted successfully!');
    }
}
