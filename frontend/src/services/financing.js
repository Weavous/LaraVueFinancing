import { http } from "./http.js";

export default {
  exchanges: (token, data) => {
    return http.post(`/exchanges`, { token: token, ...data });
  },
  index: () => {
    return [
      { id: 1, quantity: 48 },
      { id: 1, quantity: 12 },
      { id: 1, quantity: 6 }
    ];
  }
};
