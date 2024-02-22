$(document).ready(function() {

    var checkBox = $('.type');
    var checkElem = $('.inputCheck');
    
    checkItem();

    checkElem.change(function(event) {
        checkItem();
     
    });

    deleteBtn.click(function() {
        checkElem.each(function(index, el) {
            if ( $(this).prop('checked' )) {
                $(this).click();
            }
        });
    });

    function checkItem() {
        var itemLabel = Array();
        checkElem.each(function(index, el) {
            if ($(this).prop('checked')) {
                itemLabel.push($(this).next('.labelCheck').text());
            }
        });
        
        var itemLabelsStr = itemLabel.join(' , ');
        if (itemLabel.length > 0) {
            $('.choiceBox').text(itemLabelsStr);
        } else {
            $('.choiceBox').text('Please select Keywords');
        }
    } 
});