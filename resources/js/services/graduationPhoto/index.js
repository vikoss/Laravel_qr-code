import { baseURL } from './../baseURL';
import { get, post } from 'axios';

const API = `${baseURL}/graduation_photo`;

const uploadPhoto = (photo) => {
  const form = new FormData();
  form.append('file', photo);
  form.append('bucket', 'graduationPhoto');
  form.append('path', 'face');

  return post(`${API}/storage`, form);
};

const getUrlPhoto = (path) => get(`${API}/storage?bucket=graduationPhoto&path=${path}`);

const storePerson = (person) => {
  return post(`${API}/persons`, person);
};

const getPerson = (person) => get(`${API}/persons/${person}`);

const storeAddress = ({ personId, address }) => {
  return post(`${API}/persons/${personId}/address`, address);
};
// Atach host
const attachEvent = (event) => {
  return post(`${API}/persons/${event.personId}/events`, event);
};

const attachRelationship = (relationship) => post(`${API}/invitations/${relationship.invite_id}/relationships`, relationship)

const storeEvent = (event) => post(`${API}/events`, event);

const storeInvite = (invite) => {
  return post(`${API}/persons/${invite.guest_id}/invitations`, invite);
};

const storeHost = (host) => {
  return post(`${API}/persons/${host.person_id}/hosts`, host);
};

const generateInviteURL = ({ person, event }) => get(`${API}/invitations/${person}/${event}/generate-url`);

const listRelationships = () => get(`${API}/relationships`);

const listRelationshipTypes = () => get(`${API}/catalogs/relationships`);

const listCareer = () => get(`${API}/catalogs/events`);

const listEvents = () => get(`${API}/events`);

const zipCode = (code) => get(`${API}/catalogs/zipcodes/${code}`);

const generateQRCode = (code) => post(`${API}/qrcodes/generate`, code);

const generateEntry = (personId) => get(`${API}/entries/${personId}`);

export {
  uploadPhoto,
  storePerson,
  storeAddress,
  storeEvent,
  storeInvite,
  listRelationships,
  listEvents,
  listCareer,
  zipCode,
  generateQRCode,
  generateEntry,
  getPerson,
  generateInviteURL,
  attachEvent,
  attachRelationship,
  listRelationshipTypes,
  storeHost,
  getUrlPhoto,
};
