<!--  ALl JS Plugins =====================
        ====================================== -->
    <!--  jquery-3.7.0 js plugins -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <!--  Bootstrap js plugins -->
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <!--  jarallax js plugins -->
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <!--  jquery-ui js plugins -->
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <!--  jquery-ajaxchimp js plugins -->
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <!--  jquery-appear js plugins -->
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <!-- jquery-circle-progress js plugins -->
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <!--  magnific-popup js plugins -->
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!--  validate js plugins -->
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <!--  nouislider js plugins -->
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <!--  wnumb js plugins -->
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <!--  owl-carousel js plugins -->
    <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!--  Bootstrap js plugins -->
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <!--  wow js plugins -->
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <!--  isotope js plugins -->
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <!--  countdown js plugins -->
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <!--  Chart.js js plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <!--  jquery-circleType js plugins -->
    <script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/js/laboix.js') }}"></script>

    <!--  custom editor js plugins -->
    {{-- <script src="{{ asset('assets/js/editor.js') }}"></script> --}}

     {{-- Dropify --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

     <!-- Include Bootstrap JS and DataTables JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- Include DataTables JS -->
     <script>
        $(document).ready(function() {
           $('#dnaDataTable').DataTable();
        });
     </script>

    <!-- Include SweetAlert2 JS (including the required dependencies) -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8.2.0/dist/promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

    <script>
        @if (session()->has('success'))
            swal.fire({
                'icon': 'success',
                'title': 'Successful',
                'text': "{{ session()->get('success') }}",
            })
        @endif

        @if (session()->has('failed'))
            swal.fire({
                'icon': 'error',
                'title': 'Failed',
                'text': "{{ session()->get('failed') }}",
            })
        @endif
    </script>

    {{-- Dropify script --}}
    {{-- <script>
      $(document).ready(function(){
          // Basic
          $('.dropify').dropify();

          // Translated
          $('.dropify-fr').dropify({
              messages: {
                  default: 'Glissez-déposez un fichier ici ou cliquez',
                  replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                  remove:  'Supprimer',
                  error:   'Désolé, le fichier trop volumineux'
              }
          });

          // Used events
          var drEvent = $('#input-file-events').dropify();

          drEvent.on('dropify.beforeClear', function(event, element){
              return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
          });

          drEvent.on('dropify.afterClear', function(event, element){
              alert('File deleted');
          });

          drEvent.on('dropify.errors', function(event, element){
              console.log('Has Errors');
          });

          var drDestroy = $('#input-file-to-destroy').dropify();
          drDestroy = drDestroy.data('dropify')
          $('#toggleDropify').on('click', function(e){
              e.preventDefault();
              if (drDestroy.isDropified()) {
                  drDestroy.destroy();
              } else {
                  drDestroy.init();
              }
          })
      });
    </script> --}}

    <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

    {{-- Tiny MCE --}}
    {{-- <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#content_1' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#Content_2' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#heading_2_content' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#answer' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> --}}
