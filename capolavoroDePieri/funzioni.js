// Aggiungi un gestore di eventi clic a tutti i link
const accountIn = document.getElementById("account-in");
const clienteIn = document.getElementById("cliente-in");
const pacchettoIn = document.getElementById("pacchetto-in");
const prenotazioneIn = document.getElementById("prenotazione-in");
const accountMod = document.getElementById("account-mod");
const clienteMod = document.getElementById("cliente-mod");
const pacchettoMod = document.getElementById("pacchetto-mod");
const prenotazioneMod = document.getElementById("prenotazione-mod");
const accountDel = document.getElementById("account-del");
const clienteDel = document.getElementById("cliente-del");
const pacchettoDel = document.getElementById("pacchetto-del");
const prenotazioneDel = document.getElementById("prenotazione-del");
const accountView = document.getElementById("account-view");
const clienteView = document.getElementById("cliente-view");
const pacchettoView = document.getElementById("pacchetto-view");
const prenotazioneView = document.getElementById("prenotazione-view");

document.querySelectorAll('.btn-toggle-nav a').forEach(link => {
    link.addEventListener('click', function(event) {
      // Impedisci il comportamento predefinito del link (navigare alla pagina)
      event.preventDefault();

      // Ottieni l'ID dell'elemento cliccato
      var id = this.getAttribute('id');

      // Esegui un'azione diversa in base all'ID
      switch (id) {
        case 'inserimento-account':
          console.log('Azione per Account');
          // Nascondi tutte le pagine tranne accountIn
          accountIn.style.display = 'block';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'inserimento-cliente':
          console.log('Azione per Cliente');
          // Nascondi tutte le pagine tranne clienteIn
          accountIn.style.display = 'none';
          clienteIn.style.display = 'block';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'inserimento-pacchetto':
          console.log('Azione per Pacchetto');
          // Nascondi tutte le pagine tranne pacchettoIn
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'block';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'inserimento-prenotazione':
          console.log('Azione per Prenotazione');
          // Nascondi tutte le pagine tranne prenotazioneIn
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'block';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'modifica-account':
          console.log('Azione per Modifica Account');
          // Nascondi tutte le pagine tranne accountMod
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'block';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'modifica-cliente':
          console.log('Azione per Modifica Cliente');
          // Nascondi tutte le pagine tranne clienteMod
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'block';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'modifica-pacchetto':
          console.log('Azione per Modifica Pacchetto');
          // Nascondi tutte le pagine tranne pacchettoMod
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'block';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'modifica-prenotazione':
          console.log('Azione per Modifica Prenotazione');
          // Nascondi tutte le pagine tranne prenotazioneMod
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'block';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'cancellazione-account':
          console.log('Azione per Cancella Account');
          // Nascondi tutte le pagine tranne accountDel
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'block';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'cancellazione-cliente':
          console.log('Azione per Cancella Cliente');
          // Nascondi tutte le pagine tranne clienteDel
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'block';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'cancellazione-pacchetto':
          console.log('Azione per Cancella Pacchetto');
          // Nascondi tutte le pagine tranne pacchettoDel
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'block';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'cancellazione-prenotazione':
          console.log('Azione per Cancella Prenotazione');
          // Nascondi tutte le pagine tranne prenotazioneDel
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'block';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'visualizzazione-account':
          console.log('Visualizzazione Account');
          // Nascondi tutte le pagine tranne accountView
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'block';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'visualizzazione-cliente':
          console.log('Visualizzazione Cliente');
          // Nascondi tutte le pagine tranne clienteView
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'block';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'none';
          break;
        case 'visualizzazione-pacchetto':
          console.log('Visualizzazione Pacchetto');
          // Nascondi tutte le pagine tranne pacchettoView
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'block';
          prenotazioneView.style.display = 'none';
          break;
        case 'visualizzazione-prenotazione':
          console.log('Visualizzazione Prenotazione');
          // Nascondi tutte le pagine tranne prenotazioneView
          accountIn.style.display = 'none';
          clienteIn.style.display = 'none';
          pacchettoIn.style.display = 'none';
          prenotazioneIn.style.display = 'none';
          accountMod.style.display = 'none';
          clienteMod.style.display = 'none';
          pacchettoMod.style.display = 'none';
          prenotazioneMod.style.display = 'none';
          accountDel.style.display = 'none';
          clienteDel.style.display = 'none';
          pacchettoDel.style.display = 'none';
          prenotazioneDel.style.display = 'none';
          accountView.style.display = 'none';
          clienteView.style.display = 'none';
          pacchettoView.style.display = 'none';
          prenotazioneView.style.display = 'block';
          break;
        default:
          console.log('Azione predefinita');
      }
    });
});
