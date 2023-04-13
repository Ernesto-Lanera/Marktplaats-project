function search() {
    // Get the search query from the input field
    var query = document.getElementById('searchInput').value.toLowerCase();
    
    // Get the container for search results
    var resultsContainer = document.getElementById('searchResults');
    
    // Clear previous search results
    resultsContainer.innerHTML = '';
    
    // Perform the search
    var searchResults = performSearch(query);
    
    // Update the search results container
    searchResults.forEach(function(result) {
      var li = document.createElement('li');
      li.textContent = result;
      resultsContainer.appendChild(li);
    });
  }
  
  function performSearch(query) {
    // Perform your search logic here
    // This can include searching through an array, making an API call, etc.
    // Return the search results as an array
    var results = [];
    // Example search logic
    var data = ['games', 'ps5', 'xbox', 'pc','nintendo'];
    for (var i = 0; i < data.length; i++) {
      if (data[i].toLowerCase().includes(query)) {
        results.push(data[i]);
      }
    }
    return results;
  }