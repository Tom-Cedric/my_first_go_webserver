/*
 * @description:
 *                  Is the function to convert the normal text to morse code.
 *
 */
function encodeToMorseCode() {

    var s_input_code = document.getElementById("main-morsecode-div-Input").value;
    var s_output_morsecode = document.getElementById("main-morsecode-div-Output");

    var ob_characters_and_morsecode = new Object();

    ob_characters_and_morsecode = [

        {   character: "A", morse_code: ".-"   },
        {   character: "B", morse_code: "-..." },
        {   character: "C", morse_code: "-.-." },
        {   character: "D", morse_code: "-.."  },
        {   character: "E", morse_code: "."    },
        {   character: "F", morse_code: "..-." },
        {   character: "G", morse_code: "--."  },
        {   character: "H", morse_code: "...." },
        {   character: "I", morse_code: ".."   },
        {   character: "J", morse_code: ".---" },
        {   character: "K", morse_code: "-.-"  },
        {   character: "L", morse_code: ".-.." },
        {   character: "M", morse_code: "--"   },
        {   character: "N", morse_code: "-."   },
        {   character: "O", morse_code: "---"  },
        {   character: "P", morse_code: ".--." },
        {   character: "Q", morse_code: "--.-" },
        {   character: "R", morse_code: ".-."  },
        {   character: "S", morse_code: "..."  },
        {   character: "T", morse_code: "-"    },
        {   character: "U", morse_code: "..-"  },
        {   character: "V", morse_code: "...-" },
        {   character: "W", morse_code: ".--"  },
        {   character: "X", morse_code: "-..-" },
        {   character: "Y", morse_code: "-.--" },
        {   character: "Z", morse_code: "--.." }

    ];

    var s_upper_input = s_input_code.toUpperCase();
    var i_input_length = s_upper_input.length;
    var s_morsecode  = "";

    /*
     * @description:
     *                  In this loop I go letter by letter and replace it with the corresponding Morse code.
     *
     */
    for (var i_index = 0; i_index <= i_input_length - 1; i_index++) {

        var s_letter = s_upper_input.charAt(i_index);

        for (var i_index_obj = 0; i_index_obj <= ob_characters_and_morsecode.length - 1; i_index_obj++) {

            if (s_letter == ob_characters_and_morsecode[i_index_obj].character) {

                s_morsecode += s_letter.replace(s_letter, ob_characters_and_morsecode[i_index_obj].morse_code) + " ";

            }

        }

    }

    s_output_morsecode.value = s_morsecode;

}