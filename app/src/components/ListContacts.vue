<template>
<div>
<h1>Contacts ()</h1>


<table class="table table-bordered table-hover">

<thead>

<tr>

<th>#</th>

<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th> Address </th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr v-for="contact in contacts">

<th>{ { contact.id } }</th>

<th>{ { contact.first_name } }</th>

<td>{ { contact.last_name } }</td>

<td>{ { contact.email } } </td>

<td>{ { contact.phone } }</td>

<td>{ { contact.adress } }</td>

<td>

<button class="btn btn-danger" @click="deleteContact(contact)"> X</button>
</td>
</tr>
</tbody>
</table>
<div>
</div>
</div>

</template>

<script>
import {APIService} from '../APIService';

const API_URL = 'http://localhost:8000';
const apiService = new APIService();

export default {

name: 'ListContacts',

components: {

},

data() {

return {
contacts: [],
numberOfContacts:0,

};

},

methods: {

getContacts(){
    apiService.getContacts().then((data) => {

        this.contacts = data.data;
        this.numberOfContacts= data.count;
    });
},
},

mounted() {
this.getContacts();
},
}
</script>