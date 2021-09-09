import axios from 'axios';

export default () => axios.create({

  baseURL: 'http://localhost/initPHP/site_eracles/src/PHP',
  // baseURL: 'http://localhost/initPHP/site_eracles/src/PHP/test_delete.php',
  // baseURL: 'http://localhost/initPHP/site_eracles/src/PHP/test_create.php.php',
  // baseURL: 'http://localhost/initPHP/site_eracles/src/PHP/test_update.php',
  // baseURL: 'http://localhost/initPHP/site_eracles/src/PHP/test_read.php',
});
