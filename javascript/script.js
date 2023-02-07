// const dvdForm = $(document).$(".dvd-form");
// const bookForm = $(document).$(".book-form");
// const furnitureForm = (document).$(".furniture-form");
// const selectDvd = $(document).$("select .select-dvd");
// const selecBook = $(document).$("#Book");
// const selectFurniture = $(document).$("#Furniture");
// const formContainer = $(document).$(".formContainer");

// selectDvd.addEventListener("click", () => {
//     alert("hello!");
// });


$(document).ready(function () {
    $("#productType").change(function () {
        var values = $("#productType option:selected");
        // alert(values.text());
        // if (values.text() == "DVD") {
        //     alert("you choose dvd");
        // }


        // $("#productType").change(function () {
        //     $(this).find("option:selected").each(function () {
        //         var optionValue = $(this).attr("value");
        //         if (optionValue) {
        //             $("#dvd-form").not("." + optionValue).hide();
        //             $("." + optionValue).show();
        //         } else {
        //             $(".box").hide();
        //         }
        //     });
        // }).change();





        switch (values.text()) {
            case "DVD":

                $("#dvd-form").change(function () {
                    $(this).show();
                });
        }).change();






            // $("#dvd-form").click(function () {
            //     $(this).addClass("display");

            // })
            // alert("you choose dvd");
            //     break;
            // case "Furniture":
            //     alert("you choose forniture");
            //     break;
            // case "Book":
            //     alert("you choose book");
            //     break;

            default:
    break;
}



    });
});

// alert("hello!");
