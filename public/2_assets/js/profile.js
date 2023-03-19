function toggleEdit() {
    // Get all the td elements
    const tds = document.getElementsByTagName("td");
    // Loop through each td element
    for (let i = 0; i < tds.length; i++) {
      // Toggle the contenteditable attribute between true and false
      tds[i].contentEditable = tds[i].contentEditable === "true" ? "false" : "true";
    }
  }

  function editDetails() {
    // Get the button element
    var editButton = document.getElementById("editButton");
  
    // Get the table element
    var table = document.getElementsByTagName("table")[0];
  
    if (editButton.innerHTML === "Edit Details") {
      // Change the button text to "Save"
      editButton.innerHTML = "Save";
  
      // Enable editing of table cells
      for (var i = 0; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++) {
          table.rows[i].cells[j].contentEditable = "true";
        }
      }
    } else {
      // Change the button text back to "Edit Details"
      editButton.innerHTML = "Edit Details";
  
      // Disable editing of table cells
      for (var i = 0; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++) {
          table.rows[i].cells[j].contentEditable = "false";
        }
      }
    }
  }