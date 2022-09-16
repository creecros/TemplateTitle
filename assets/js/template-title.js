KB.onClick('.js-template-title', function (e) {
    var template = KB.dom(e.target).data('template');
    var target = KB.dom(e.target).data('templateTarget');
    var targetField = KB.find(target);
    var template2 = KB.dom(e.target).data('templatetitle');
    var target2 = KB.dom(e.target).data('templatetitleTarget');
    var targetField2 = KB.find(target2);

    if (targetField) {
        targetField.build().value = template;
    }
    if (targetField2) {
        targetField2.build().value = template2;
    }

    _KB.controllers.Dropdown.close();
});