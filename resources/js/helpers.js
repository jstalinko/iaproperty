export default {
    capitalizeWords: function (arr) {
        return arr.map(element => {
            return element.charAt(0).toUpperCase() + element.substring(1).toLowerCase();
        });
    },

    makeReadable: function (key) {
        return this.capitalizeWords(key.replaceAll('_', ' ').split(' ')).join(' ');
    },
    rupiah: function(angka){
        return "Rp. "+new Intl.NumberFormat("en-ID").format(
            angka
          );
    }
}