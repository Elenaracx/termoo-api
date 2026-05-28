// Importa dependências
import axios from 'axios';
// Define ou atualiza uma variável
window.axios = axios;

// Define ou atualiza uma variável
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';