// function toggleInput() {
//   var checkbox = document.getElementById("edit_data");
//  var textInputs = [
//     document.getElementById("text"),
//     document.getElementById("textInput2"),
//     document.getElementById("textInput3")
//   ];

//   if (checkbox.checked) {
//     textInputs.forEach(function(textInput) {
//       textInput.disabled = false;
//     });
//       alert(sukses);
//   } else {
//     textInputs.forEach(function(textInput) {
//       textInput.disabled = true;
//     });
//   }
// }

 var checkbox = document.getElementById("editdata");

                                                            checkbox.addEventListener("change", function() {
                                                                if (this.checked) {
                                                                    alert("Checkbox diaktifkan: Berhasil enable");
                                                                } else {
                                                                    alert("Checkbox dinonaktifkan: Berhasil disable");
                                                                }
                                                            });