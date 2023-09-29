define(['knockout', 'jquery'], function (ko, $) {
    return function (config) {
        var topBarSpeed = ko.observable(config.topBarSpeed / 100);
        var isSliding = ko.observable(config.isSliding);

        function scrollText() {
            var $textContainer = $("#topBarSliderText");
            var textWidth = $textContainer[0].scrollWidth;
            var containerWidth = $textContainer.parent().width();
            var time = (containerWidth + textWidth) / topBarSpeed();

            $textContainer.css("text-indent", containerWidth);
            $textContainer.animate(
                { "text-indent": -textWidth },
                time,
                "linear",
                function () {
                    $textContainer.css("text-indent", containerWidth);
                    scrollText();
                }
            );
        }

        $(document).ready(function () {
            if (isSliding() && topBarSpeed()) {
                scrollText();
            }
        });

        return;
    };
});
