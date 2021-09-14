import { http } from './http.js';

export default {
    index: () => { return http.get(`/brands`) },
    destroy: (id) => { return http.delete(`/brands/${id}`) },
};