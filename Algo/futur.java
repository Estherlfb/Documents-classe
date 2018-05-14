String calcul_heure (int h, int m){
    m = m+1;
    h = h+m/60;
    m = m%60;
    h = h%24; 
}
return "Dans une minute il sera" + h + "heure" +m;


 // TypageRetour nomMéthode(typage param1, typage parm2) {
    String futur(int h, int m) {
 
        // incrémenter le m
        m = m+1;
        // Verifier s'il dépasse les 59
       if(m>59){
         h = h+m/60;  
        }
        // Transferer l'exedant de minute dans h
        // Borner les heures %24
        m = m%60;
        h = h%24;
        return "Dans une minute il sera " + h + " heure(s)" + m;
}


// CORRECTION
    public class Depart {
 
    // email : anthony.monteiro.85@gmail.com
    // TypageRetour nomMéthode(typage param1, typage parm2) {
    String futur(int h, int m) {
 
        // incrémenter le m
        m = m + 1; // m+=1;
 
        // Verifier s'il dépasse les 59
        if (m > 59) {
            // Transferer l'exedant de minute dans h
            h = h + m / 60;
            m = m % 60;// m%=60;
        }
 
        // Borner les heures %24
        h = h % 24;
        return "Dans une minute il sera " + h + " heure(s)" + m;
    }
 
    String futur(int h, int m, int nbMin) {
 
        // incrémenter le m
        m = m + nbMin; // m+=1;
 
        // Verifier s'il dépasse les 59
        // Transferer l'exedant de minute dans h
        h = h + m / 60;
        m = m % 60;// m%=60;
 
        // Borner les heures %24
        h = h % 24;
        return "Dans une minute il sera " + h + " heure(s)" + m;






// Mois avec ET
boolean checkMois(int numeroMois) {

    if (numeroMois >= 1 && numeroMois <= 12);{
        return true; 
    }
    else{
        return false;
    }
}

// Mois avec OU
boolean checkMois(int numeroMois) {

    if (numeroMois < 1 || numeroMois  >12);{
        return false; 
    }
    else{
        return true;
    }
}

// 1 [-2 5] [15 27[
boolean checkMois(int numeroMois) {

    if ((numeroMois >=-2 && numeroMois <=5) || (numeroMois >=15 && numeroMois <27));{
        return true; 
    }
    else {
        return false;
    }
}

// 2 [5 25] [12 48]
boolean checkMois(int numeroMois) {

    if ((numeroMois >=5 && numeroMois <=25) || (numeroMois >=12 && numeroMois <=48)); 
        // ou
       (numeroMois >=5 && numeroMois <=48) {
        return true; 
    }
    else {
        return false;
    }
}

// 3 [-5 +infini[
boolean checkMois(int numeroMois); {

    if (numeroMois >=-5) {
        return true; 
    }
    else {
        return false;
    }
}

// 4 [2 18] [4O][50][60 +infini[
boolean checkMois(int numeroMois) {

    if ((numeroMois >=2 && numeroMois <=18) || (numeroMois == 40) || (numeroMois == 50) || (numeroMois >=60)); {
        return true; 
    }
    else {
        return false;
    }
}

// 5 ]-infini 0[ ]0 +infini[
boolean checkMois(int numeroMois) {

    if (numeroMois != 0); {
        return true; 
    }
    else {
        return false;
    }
}

// 6 ]-infini +infini[
boolean checkMois(int numeroMois) {

    if (true); {
        return true; 
    }
    else {
        return false;
    }
}


// Exo
boolean checkAnnee(int numeroAnnee) {
 
    if(numeroAnnee>0);{

        return true
    }
    else{
        return false
    }  

// Ou
boolean checkAnnee(int numeroAnnee) {
    return annee>0;
}

// boolean checkJour (int numeroJour) {

//     if((numeroJour >= 1 && <= 31) || (numeroJour >= 1 && numeroJour < 29) || (numeroJour >= 1 && numeroJour <= 29) || (numeroJour >=1 && <31));
//         return true
//     }
//     else{
//         return false
//     }   
// }        

     boolean checkJour(int j, int m, int a) {
 
        // Mois à 31 jours
        if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
            return j >= 1 && j <= 31;
        }
        // Mois à 30 jours
        else if (m == 4 || m == 6 || m == 9 || m == 11) {
            return j >= 1 && j <= 30;
        }
        // fevrier
        else if (m == 2) {
            if (isBix(a)) {
                return j >= 1 && j <= 29;
            } else {
                return j >= 1 && j <= 28;
            }
        }
        // Autre
        else {
            // TODO
            return false;
        }
 
    }



    // Lannée est bissextile si elle est divisible par quatre. Toutefois, les
    // années divisibles par 100 ne sont pas bissextiles, mais les années
    // divisibles par 400 le sont. Ouf !
    boolean isBix(int a) {
        if (a % 4 == 0) {
            if (a % 400 == 0) {
                return true;
            } else if (a % 100 == 0) {
                return false;
            } else {
                return true;
            }
        }
        return false;
    }
}


Config file location
    --global              use global config file
    --system              use system config file
    --local               use repository config file
    -f, --file <file>     use given config file
    --blob <blob-id>      read config from given blob object

Action
    --get                 get value: name [value-regex]
    --get-all             get all values: key [value-regex]
    --get-regexp          get values for regexp: name-regex [value-regex]
    --get-urlmatch        get value specific for the URL: section[.var] URL
    --replace-all         replace all matching variables: name value [value_regex]
    --add                 add a new variable: name value
    --unset               remove a variable: name [value-regex]
    --unset-all           remove all matches: name [value-regex]
    --rename-section      rename section: old-name new-name
    --remove-section      remove a section: name
    -l, --list            list all
    -e, --edit            open an editor
    --get-color           find the color configured: slot [default]
    --get-colorbool       find the color setting: slot [stdout-is-tty]

Type
    --bool                value is "true" or "false"
    --int                 value is decimal number
    --bool-or-int         value is --bool or --int
    --path                value is a path (file or directory name)
    --expiry-date         value is an expiry date

Other
    -z, --null            terminate values with NUL byte
    --name-only           show variable names only
    --includes            respect include directives on lookup
    --show-origin         show origin of config (file, standard input, blob, command line)
