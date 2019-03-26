<?php
    $facts = array(
        "Cats sleep 16 to 18 hours per day.",
        "In the average lifetime, a person will walk the equivalent of 5 times around the equator.",
        "The sound of E.T. walking was made by someone squishing her hands in jelly.",
        "Elephants are the only mammals that can't jump.",
        "The international telephone dialing code for Antarctica is 672.",
        "Diet Coke was only invented in 1982.",
        "American car horns beep in the tone of F.",
        "The fist product to have a bar code was Wrigleys gum.",
        "The word 'nerd' was first coined by Dr. Seuss in 'If I Ran the Zoo.'",
        "Henry Ford produced the model T only in black because the black paint available at the time was the fastest to dry."
        );
       
        echo json_encode($facts[rand(0,9)]);
        
        /* Where I got the facts https://www.cs.cmu.edu/~bingbin/*/
?>

