
  <script>
  $( function() {
   
    var course = 

[
"Java Developer",
"PHP Developer",
"JavaScript",
"PYTHON",
"C#",
"C++",
"Ruby",
"Swift",
".NET",
"COBOL",
"CSS",
"HTML",
"Node.js",
"Bootstrap",
"MySQL",
"Perl",
"PL\/SQL",
"Scala",
"CodeIgniter",
"SOAP",
"Laravel",
"jQuery",
"WEB DEVELOPER",
"SEO",
"Wordpress Developer"
];

    $( "#course" ).autocomplete({
      source: course
    });

     $( ".course" ).autocomplete({
      source: course
    });
  } );
  </script>