<form action="/application"  enctype="multipart/form-data" method="post">
        @csrf
        Birth certificate
                    <input type="file" name="doc1" >

                    <input type="submit" value="Save" class="save_btn save">
    </form>           