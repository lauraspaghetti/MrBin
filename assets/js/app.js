/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

//Récupération de React 
import React from 'react';
import ReactDOM from 'react-dom';
import { App } from './components/App'; 

let reactRoot = document.getElementById('react-root');

if (reactRoot != undefined){

    ReactDOM.render(
        <App></App>, 
        reactRoot
    ); 
}
