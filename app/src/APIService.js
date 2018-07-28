import axios from 'axios';
const API_URL = 'http://127.0.0.1:8000';

export class APIService{
	constructor(){
	}
	
	getContacts() {
	    const url = `${API_URL}/contacts/`;
	    return axios.get(url).then(response => response.data);
	}

	getContact(id) {
	    const url = `${API_URL}/api/contacts/${id}`;
	    return axios.get(url).then(response => response.data);
	}
}
