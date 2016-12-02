/* var configParams - configuration JSON
   const FRAME_ID - id of adverticing frame
   (got by link "...Inuendo/web/advertisement?id=1")*/

var InuendoFrame = (function (window,undefined,configParams,frameId) {

    class AdScreen {
        constructor() {
            //будут ссылаться друг на друга через триггеры, получается подобие графовой структуры.
            // Элементы, на которые больше не ссылаются, удаляются сборщиком мусора автоматически
        }
    }

    class Advertice {
        constructor() {
            this.triggers = [];
            this.currentScreen = null;
            this.mediaContent = {};
            //начало загрузки рекламы, может определить дополнительный метод для дальнейшей обработки
        }
    }

    class Trigger {
        constructor() {
        }
    }

    class InuendoAdFrame {
        constructor(configParams, frameId) {
            this.config = JSON.parse(configParams);
            this.frameId = frameId;
            this.advertice = new Advertice();
            alert(`initialized: ${this.config} , ${this.frameId}`);
            //todo запрос на получение рекламы с помещением в advertice ( сделать промисами ?)

        }
    }

    var frame = new InuendoAdFrame(configParams, FRAME_ID);

    return {};
})(window,undefined,configParams,FRAME_ID);