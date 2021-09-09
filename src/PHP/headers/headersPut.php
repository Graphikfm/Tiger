<?php

// ici, 'Access-Control-Allow-Origin' permet d'indiquer ou d'interdire l'acces à l'API
// Avec *, on autorise l'acces à toutes les adresses.
header('Access-Control-Allow-Origin: *');
//Content-Type: application/json' permet de spécifier le type de contenu.'
// ici, du JSON. La contrainte REST permet de dev' pour n'importe quel support et le JSON est parfait pour ça. 
header('Content-Type: application/json; charset=UTF-8');
// 'Access-Control-Allow-Methods' permet de spécifier la/les méthodes autorisées
header('Access-Control-Allow-Methods: PUT');
// 'Access-Control-Max-Age' permet de spécifier le temps de cache.
header('Access-Control-Max-Age: 3600');
// 'Access-Control-Allow-Headers' permet de spécifier les headers autorisés
header('Acces-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
// verif si la methode utilisée est correcte pour une api rest