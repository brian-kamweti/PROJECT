<?php include'header.php'?>
    <div class="row">
        <form action="uploadHandler.php" method="post" enctype="multipart/form-data">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image"><br>
                </div>
                <div class="form-group">
                    <label for="brand">Brand Name:</label>
                    <input type="text" name="brandname" id="brandname"><br>
                </div>
                <div class="form-group">
                    <label for="size">Shoe Size:</label>
                    <input type="number" name="size" id="size"><br>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price"><br>
                </div>
                <button type="submit" name="upload" class="btn btn-default">Upload</button>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
        </form>
    </div>
<?php include 'footer.php'?>