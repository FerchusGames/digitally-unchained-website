$(document).on("click", ".btn-add", function (event) {
  event.preventDefault();
  let product = $(this).data("product");
  Swal.fire({
    title: "Adding product to cart",
    didOpen: () => {
      Swal.showLoading();
      $.post("/shoppingcart/add", { product: product }, function (data) {
        Swal.close();
        Swal.fire(data.message);
      });
    },
  });
});
