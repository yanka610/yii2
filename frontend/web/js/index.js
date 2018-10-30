if(localStorage.getItem("products") == null) {
    localStorage.setItem('products', JSON.stringify([]));
}
var app3 = new Vue({
    el: '#pages_app',

    data: {
        products: JSON.parse(localStorage.getItem("products")),
        string_products: localStorage.getItem("products"),
    },

    methods: {
        addProdBasket: function(idproduct, name, content, price, category, path) {

            this.products.push({ id: idproduct, name: name, content: content, price: price,  category: category,path:path });

            localStorage.setItem('products', JSON.stringify(this.products));
            this.string_products = localStorage.getItem("products");
        },
        deleteProduct: function(index) {
            this.products.splice(index, 1);
            localStorage.setItem('products', JSON.stringify(this.products));
            this.string_products = localStorage.getItem("products");
        },
        deleteLocalStorage: function() {
            localStorage.removeItem("products");
            localStorage.clear();
        }
    }
});