//Progetto: db-ex-4

 console.log('test js');

 $(document).ready(function () {

    var id = $('#tabella_ospite').attr('data-id');
    var url = 'http://localhost/FEBBRAIO/db-ex-4/routes/restituisci-ospite.php?id=' + id;

    $.getJSON(url, showGuests);


     //FUNCTIONS
     function showGuests(guests){
          for (var i = 0; i < guests.length; i++) {

            var guest = guests[i];
            var htmlTemplate = $('#ospite_template').html();
            var template = Handlebars.compile(htmlTemplate);

            var data = {
              id: guest.id,
              name: guest.name,
              lastname: guest.lastname,
              dateOfBirth: guest.date_of_birth,
              documentType: guest.document_type,
              documentNnumber:guest.document_number,
              createdAt: guest.created_at,
              updatedAt: guest.updated_at
            }

            var html = template(data);

            $('#dati_ospite').append(html);
          }


        }

});
