function popUp(id) {

    var textVoorPopUp;
    var titleVoorPopUp;

    //Ik weet dat dit ook in een DB kan alleen ik ben lui en daarom doe ik het zooooooooo. :) het kan namelijk ook met een API opgehaald worden en dan hoef ik niet eens een switch case te gebruiken.
    //Want dan kan ik de id mee geven in de data base waardoor ik het kan ophalen incl informatie veel kortere code alleen dan moet ik wel een table aan maken met maar liefst 3 columns
    //ID (Primary) titleVoorPopUp en textVoorPopUp 
    //Dan kan ik met behulp van een API in JS deze data verwerken zelfde strategie met de ID

    //En als positieve kant als je het opslaat in de DB kan je het user frendly maken door het aan te kunnen passen in een UI 

    //Pretty cool :D

    //Ookal is een switch case wel beter dan if else

    switch (id) {
        case 1:
            titleVoorPopUp = 'Gratis Diagnose?';
            textVoorPopUp = 'Een gratis diagnose houdt in dat we onderzoeken wat het probleem is, of er eventuele onderliggende kwesties zijn, en wat Flitserz voor u kan betekenen. We verstrekken ook informatie over de geschatte kosten van de benodigde diensten.';
            break;
        case 2:
            titleVoorPopUp = 'Stofvrij leven met uw laptop!';
            textVoorPopUp = 'Bij Flitserz zorgen we ervoor dat uw laptop volledig schoon is, zowel van binnen als van buiten, zonder vlekken en vrij van stof.';
            break;
        case 3:
            titleVoorPopUp = 'Stofvrij en cool leven met uw laptop!';
            textVoorPopUp = 'Een stofvrij bestaan voor uw laptop. Bij Flitserz zorgen we ervoor dat uw laptop grondig wordt gereinigd, zowel van binnen als van buiten, zonder vlekken en volledig stofvrij. Ook vervangen we de thermische pasta van uw laptop, waardoor deze optimaal blijft koelen, zelfs tijdens intensief gebruik.';
            break;
        case 4:
            titleVoorPopUp = 'Stof vrij, cool en geoptimaliseerd leven';
            textVoorPopUp = 'Een stofvrij bestaan voor uw laptop. Bij Flitserz zorgen we ervoor dat uw laptop grondig wordt gereinigd, zowel van binnen als van buiten, zonder vlekken en volledig stofvrij. Daarnaast vervangen we de thermische pasta van uw laptop, waardoor deze optimaal blijft koelen, zelfs tijdens intensief gebruik. Bovendien optimaliseren we ook de softwarematige prestaties van uw laptop, om ervoor te zorgen dat deze soepel en efficiënt blijft werken.';
            break;
        case 5:
            titleVoorPopUp = 'Stofvrij leven met uw Desktop!';
            textVoorPopUp = 'Bij Flitserz zorgen we ervoor dat uw Desktop volledig schoon is, zowel van binnen als van buiten, zonder vlekken en vrij van stof.';
            break;
        case 6:
            titleVoorPopUp = 'Stofvrij en cool leven met uw Desktop!';
            textVoorPopUp = 'Een stofvrij bestaan voor uw Desktop. Bij Flitserz zorgen we ervoor dat uw Desktop grondig wordt gereinigd, zowel van binnen als van buiten, zonder vlekken en volledig stofvrij. Ook vervangen we de thermische pasta van uw Desktop, waardoor deze optimaal blijft koelen, zelfs tijdens intensief gebruik.';
            break;
        case 7:
            titleVoorPopUp = 'Schoon en geoptimaliseerd leven Telefoon/Tablet';
            textVoorPopUp = 'Als je telefoon niet meer optimaal oplaadt, bieden wij de oplossing. Wij reinigen je telefoon grondig, zowel van binnen als van buiten, om ervoor te zorgen dat het laadproces weer probleemloos verloopt. Geef je telefoon een frisse start met onze schoonmaakdienst en ervaar het verschil.';
            break;
        default:
            break;
    }

    Swal.fire({
        title: titleVoorPopUp,
        text: textVoorPopUp,
        icon: "info",
        confirmButtonColor: "#227525",
        background: "#ebffeb"
    });
}