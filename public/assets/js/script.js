$(document).ready(function() {
    // Listen for form submission
    $('#search-form').on('submit', function(e) {
      e.preventDefault(); // Prevent form from submitting normally
      
      // Get query from form input
      const query = $('#query').val();
      
      // Make AJAX request to PHP script
      $.ajax({
        url: 'request.php',
        type: 'GET',
        data: {prompt: query},
        dataType: 'json',
        success: function(data) {
          // Display results
          $('#results').html(data.choices[0].text);
        },
        error: function() {
          alert('Error searching');
        }
      });
    });
  });
  