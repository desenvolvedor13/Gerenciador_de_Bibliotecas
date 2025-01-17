/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


import axios from 'axios';

// Agora você pode usar a variável baseURL que foi injetada pelo PHP
export const getLogoUrl = async () => {
  try {
    const response = await axios.get(`${baseURL}/api/get_logo_url`);
    return response.data.logo_url;  // Retorna o caminho da logo
  } catch (error) {
    console.error('Erro ao carregar o caminho da logo:', error);
    return null;  // Retorna null caso haja erro
  }
};
