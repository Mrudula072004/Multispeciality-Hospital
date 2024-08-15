/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function isNumber(evt) {
                     var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if ( iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;


    }   


function isString(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if ((iKeyCode < 65 || iKeyCode > 90 ) && (iKeyCode < 97 || iKeyCode > 123) && iKeyCode != 32 && iKeyCode!=8)
            return false;

        return true;
    }    


function isFloat(evt) {
              var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 43 || iKeyCode > 57))
            return false;

        return true;

    }    


function isAlphanumric(evt) {
              var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode > 32 && (iKeyCode < 65 || iKeyCode > 90) &&
        (iKeyCode < 97 || iKeyCode > 122) && iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;

    }    



function isContactno(evt) {
                     var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if ( iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;


    }  



