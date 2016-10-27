<?php

use yii\db\Migration;

class m161026_190359_messages_first_initialization extends Migration
{
    public function safeUp()
    {
        $this->batchInsert("source_message",["category","message"],
               [["app", "landing_main_benefits"],
                ["app", "landing_1st_benefit"],
                ["app", "landind_1st_benefit_description"],
                ["app", "landing_2nd_benefit"],
                ["app", "landing_2nd_benefit_description"],
                ["app", "landing_3rd_benefit"],
                ["app", "landing_3rd_benefit_description"],
                ["app", "landing_our_team"],
                ["app", "landing_Denis"],
                ["app", "landing_Denis_description"],
                ["app", "landing_Alexander_K"],
                ["app", "landing_Alexander_K_description"],
                ["app", "landing_Alexander_A"],
                ["app", "landing_Alexander_A_description"],
                ["app", "landing_Yuriy"],
                ["app", "landing_Yuriy_description"],
                ["app", "landing_Svetlana"],
                ["app", "landing_Svetlana_description"],
                ["app", "landing_Alexey"],
                ["app", "landing_Alexey_Description"],
                ["app", "landing_find_us"],
                ["app", "landing_find_us_location"],
                ["app", "landing_contacts"],
                ["app", "landing_contacts_mail"],
                ["app", "landing_contacts_phone"],
                ["app", "landing_contacts_skype"],
                ["app", "landing_about_us"],
                ["app", "landing_about_us_description"],
                ["app", "admin_page_support_wellcome"],
                ["app", "admin_page_support_ignor_list"],
                ["app", "admin_page_support_ignor_list_reason_of_adding_24.09.2016"],
                ["app", "admin_page_support_ignor_list_reason_of_adding_28.09.2016"],
                ["app", "admin_page_support_ignor_list_reason_of_adding_29.09.2016"],
                ["app", "admin_page_support_ignor_list_reason_of_adding_01.10.2016"],
                ["app", "admin_page_support_ignor_list_reason_of_adding_03.10.2016"],
                ["app", "admin_page_support_user_message_1"],
                ["app", "admin_page_support_user_message_2"],
                ["app", "admin_page_support_user_message_3"],
                ["app", "admin_page_support_user_message_4"],
                ["app", "admin_page_management_wellcome"],
                ["app", "admin_page_management_user_ad_1_title"],
                ["app", "admin_page_management_user_ad_1_description"],
                ["app", "admin_page_management_user_ad_2_title"],
                ["app", "admin_page_management_user_ad_2_description"],
                ["app", "admin_page_management_user_ad_3_title"],
                ["app", "admin_page_management_user_ad_3_description"],
                ["app", "admin_page_management_user_ad_4_title"],
                ["app", "admin_page_management_user_ad_4_description"],
                ["app", "admin_page_management_user_ad_5_title"],
                ["app", "admin_page_management_user_ad_5_description"],
                ["app", "admin_page_management_user_ad_6_title"],
                ["app", "admin_page_management_ban_list"],
                ["app", "admin_page_management_ban_list_reason_30.09.2016"],
                ["app", "admin_page_management_ban_list_reason_01.10.2016"],
                ["app", "admin_page_management_ban_list_reason_02.10.2016"],
                ["app", "admin_page_management_ban_list_reason_10.10.2016"],
                ["app", "admin_page_management_ban_list_reason_14.10.2016"],
                ["app", "admin_page_moderation_wellcome"],
                ["app", "admin_page_moderation_user_ad_1_title"],
                ["app", "admin_page_moderation_user_ad_1_tagline"],
                ["app", "admin_page_moderation_user_ad_2_title"],
                ["app", "admin_page_moderation_user_ad_2_tagline"],
                ["app", "admin_page_moderation_user_ad_3_title"],
                ["app", "admin_page_moderation_user_ad_3_tagline"],
                ["app", "admin_page_moderation_user_ad_4_title"],
                ["app", "admin_page_moderation_user_ad_4_tagline"],
                ["app", "admin_page_moderation_user_ad_5_title"],
                ["app", "admin_page_moderation_user_ad_5_tagline"],
                ["app", "admin_page_moderation_user_ad_6_title"],
                ["app", "admin_page_moderation_user_ad_6_tagline"],
                ["app", "admin_page_moderation_user_ad_7_title"],
                ["app", "admin_page_moderation_user_ad_7_tagline"],
                ["app", "admin_page_moderation_user_ad_8_title"],
                ["app", "admin_page_moderation_user_ad_8_tagline"],
                ["app", "admin_page_header_management"],
                ["app", "admin_page_header_moderation"]]);
        
        $this->batchInsert("message",["id","language","translation"],
               [
                   [1, "ru", "Наши преимущества"],
                   [1, "ua", "Наші переваги"],
                   [1, "en", "Our advantages"],

                   [2, "ru", "С нами легко!"],
                   [2, "ua", "З нами легко!"],
                   [2, "en", "It is simple!"],

                   [3, "ru", "Inuendo - простой, но в то же время эффективный сервер интерактивной рекламы. Интуитивно понятный интерфейс, современный дизайн, надежное качетсво. Без особых усилий Вы можете дать миру знать о себе, а мы с радостью в этом поможем."],
                   [3, "ua", "Inuendo - простий, але в той же час ефективний сервер інтерактивної реклами. Інтуїтивно зрозумілий інтерфейс, сучасний дизайн, надійна якість. Без особливих зусиль Ви можете дати світу знати про себе, а ми з радістю вам у цьому допоможемо."],
                   [3, "en", "Inuendo is a simple but at the same time, an effective interactive advertising server. Intuitive interface, modern design, reliable merchant. Without any effort you can let the world know about yourself, and we are happy to help."],

                   [4, "ru", "С нами интересно!"],
                   [4, "ua", "З нами цікаво!"],
                   [4, "en", "It is interesting!"],

                   [5, "ru", "Мы гордимcя тем, что предоставляем не только сухую рекламу. Развлекательная, познавательная реклама, интересные видеоролики - и это только начало возможностей Inuendo!"],
                   [5, "us", "Ми пишаємося тим, що надаємо не тільки суху рекламу. Розважальна, пізнавальна реклама, цікаві відеоролики - і це тільки початок можливостей Inuendo!"],
                   [5, "en", "We are proud to provide not only dry advertising. Entertaining, informative advertising, interesting videos, and this is only the beginning of opportunities Inuendo!"],

                   [6, "ru", "Вы - творец собственного стиля"],
                   [6, "ua", "Ви - творець власного стилю"],
                   [6, "en", "You are Creator of Your Own Style"],

                   [7, "ru", "То, как Вас будут видеть люди, решаете лишь Вы! Создайте неповторимый и незабsваемый образ с помощью Inuendo.  Будьте уникальны. Пользователей тысячи - особенный лишь Вы."],
                   [7, "ua", "Те, як Вас будуть бачити люди, вирішуєте лише Ви! Створіть неповторний і незабутній образ за допомогою Inuendo. Будьте унікальними. Користувачів тисячі - особливий лише Ви."],
                   [7, "en", "The way that people will recognize you is only up to you!Create a unique and unforgettable image using Inuendo. Be unique. There are thousands of users - but only YOU are special."],

                   [8, "ru", "Наша команда"],
                   [8, "ua", "Наша команда"],
                   [8, "en", "Our team"],

[9, "ru", "Корнейчук Денис"],
[9, "ua", "Корнейчук Денис"],
[9, "en", "Denis Korneychyk"],

[10, "ru", "Идейный вдохновитель, лидер, разработчик"],
[10, "ua", "Натхненник команди, лідер, розробник"],
[10, "en", "Inspirer, leader, developer"],

[11, "ru", "Кубицкий Александр"],
[11, "ua", "Кубицький Олександр"],
[11, "en", "Alexander Kubitsky"],

[12, "ru", "Разработчик"],
[12, "ua", "Розробник"],
[12, "en", "Developer"],

[13, "ru", "Александр Албов"],
[13, "ua", "Александр Албов"],
[13, "en", "Alexander Albov"],

[14, "ru", "Дизайнер"],
[14, "ua", "Дизайнер"],
[14, "en", "Designer"],

[15, "ru", "Юрий Серегин"],
[15, "ua", "Юрій Серьогін"],
[15, "en", "Yuriy Seryogin"],

[16, "ru", "Тестировщик, фронденд-разработчик"],
[16, "ua", "Тестувальник, фронтенд-розробник"],
[16, "en", "Tester, frontend-developer"],

[17, "ru", "Шаталина Светлана"],
[17, "ua", "Шаталіна Світлана"],
[17, "en", "Svetlana Shatalina"],

[18, "ru", "Контент-менеджер"],
[18, "ua", "Контент-менеджер"],
[18, "en", "Content-manager"],

[19, "ru", "Романов Алексей"],
[19, "ua", "Романов Олексій"],
[19, "en", "Alexey Romanov"],

[20, "ru", "Тестировщик"],
[20, "ua", "Тестувальник"],
[20, "en", "Tester"],

[21, "ru", "Как нас найти?"],
[21, "ua", "Як нас знайти?"],
[21, "en", "How you can find us?"],

[22, "ru", "Украина, г. Николаев, Центральный район, ул. Соборная, 12"],
[22, "ua", "Україна, м. Миколаїв, Центральний район, вул. Соборна, 12"],
[22, "en", "Ukraine, Mykolaiv, Central District, Sobornaya Street 12"],

[23, "ru", "Наши контакты"],
[23, "ua", "Наші контакти"],
[23, "en", "Our contacts"],

[24, "ru", "Inuendo@gmail.com"],
[24, "ua", "Inuendo@gmail.com"],
[24, "en", "Inuendo@gmail.com"],

[25, "ru", "Тел. +3 80512 37-37-38"],
[25, "ua", "Тел. +3 80512 37-37-38"],
[25, "en", "Phone +3 80512 37-37-38"],

[26, "ru", "InuendoTeam"],
[26, "ua", "InuendoTeam"],
[26, "en", "InuendoTeam"],

[27, "ru", "О нас"],
[27, "ua", "Про нас"],
[27, "en", "About us"],

[28, "ru", "Здравствуйте! Вы хотите, чтобы о вас узнал весь мир? Хотите рассказать интересное о себе и узнать о других? Inuendo  - кратчайший путь к успеху в рекламной сфере. Покажите себя. Будьте на шаг впереди вместе с нами."],
[28, "ua", "Доброго дня! Ви хочете, щоб про вас дізнався весь світ? Хочете розповісти цікаве про себе і дізнатися про інших? Inuendo - найкоротший шлях до успіху в рекламній сфері. Покажіть себе. Будьте на крок попереду разом з нами."],
[28, "en", "Hello! Do you want to be learnt all over the world world? Do you want to say something interesting about yourself and find out something about others? Inuendo is the shortest way to be success in the advertising industry. Show yourself. Stay one step ahead with us."],

[29, "ru", "Добро пожаловать в режим администратора!"],
[29, "ua", "Ласкаво просимо в режим адміністратора!"],
[29, "en", "Wellcome admin mode"],

[30, "ru", "Игнор-лист"],
[30, "ua", "Ігнор-лист"],
[30, "en", "Ignore-list"],

[31, "ru", "24.09.2016. Некорректные вопросы (противоречие нормам этикета)"],
[31, "ua", "24.09.2016. Некоректні запитання (протиріччя нормам етикету)"],
[31, "en", "24.09.2016. Ill-posed questions (contrary to the rules of etiquette)"],

[32, "ru", "28.09.2016. Некорректные вопросы (противоречие нормам этикета)"],
[32, "ua", "28.09.2016. Некоректні запитання (протиріччя нормам етикету)"],
[32, "en", "28.09.2016. Ill-posed questions (contrary to the rules of etiquette)"],

[33, "ru", "29.09.2016. Постоянные вопросы об одной и той же проблеме"],
[33, "ua", "29.09.2016. Постійні питання про одну й ту ж проблему"],
[33, "en", "29.09.2016. Persistent questions about the same problem"],

[34, "ru", "01.10.2016. Нецензурная лексика"],
[34, "ua", "01.10.2016. Нецензурна лексика"],
[34, "en", "01.10.2016. Profanity"],

[35, "ru", "03.10.2016. Нецензурная лексика"],
[35, "ua", "03.10.2016. Нецензурна лексика"],
[35, "en", "03.10.2016. Profanity"],

[36, "ru", "Добрый день! На данный момент не могу загрузить новое видео. В чем проблема?"],
[36, "ua", "Добридень! На даний момент не можу завантажити нове відео. У чому проблема?"],
[36, "en", "Good afternoon! At the moment, I can not upload a new video. What is the problem?"],

[37, "ru", "Здравствуйте, Иван! Содержание вашей рекламы противоречит правилам сайта, поэтому она была удалена. С уважением, команда поддержки."],
[37, "ua", "Здрастуйте, Іване! Зміст вашої реклами суперечить правилам сайту, тому вона була видалена. З повагою, команда підтримки."],
[37, "en", "Hi, Ivan! The content of your advertising is contrary to the rules of the site, so it was removed. Sincerely, Support team."],

[38, "ru", "Здравствуйте,  Олег! Вам не доступна возможность загрузки новых рекламых роликов, так как вы не оплатили эту услугу. С уважением, команда поддержки."],
[38, "ua", "Здрастуйте, Олеже! Вам не доступна можливість завантаження нових рекламих роликів, так як ви не сплатили цю послугу. З повагою, команда підтримки."],
[38, "en", "Hello, Oleg! You do not have the ability to download new advertising clips, because you have not paid for this service. Yours sincerely, Support team."],

[39, "ru", "Здравствуйте. Не отображается реклама. В чем проблема?"],
[39, "ua", "Добрий день. Не відображається реклама. В чому проблема?"],
[39, "en", "Hello. No advertising is displayed. What is the problem?"],

[40, "ru", "Добро пожаловать в режим администратора!"],
[40, "ua", "Ласкаво просимо в режим адміністратора!"],
[40, "en", "Wellcome admin mode"],

[41, "ru", "Mystery-art"],
[41, "ua", "Mystery-art"],
[41, "en", "Mystery-art"],

[42, "ru", "Интуитивная живопись. Насколько вы доверяете своей интуиции? Позволите ли вы ей творить вместо себя? Возможно в вашем внутреннем 'я' таится невероятно талантливый художник. Мы расскажем вам!"],
[42, "ua", "Інтуїтивний живопис. Наскільки ви довіряєте своїй інтуїції? Чи дозволите ви їй творити замість себе? Можливо в вашому внутрішньому 'я' таїться неймовірно талановитий художник. Ми розповімо вам!"],
[42, "en", "Intuitive painting. How much do you trust your intuition? Will you let it create instead of you? Perhaps your inner 'I' has an incredibly talent for art. We'll tell you!"],

[43, "ru", "Линком"],
[43, "ua", "Лінком"],
[43, "en", "Linkom"],

[44, "ru", "Подарите себе аромат лета холодной зимой! Новые поступления ароматических свечей. Акция для постоянных клиентов!"],
[44, "ua", "Подаруйте собі аромат літа холодною зимою! Нові надходження ароматичних свічок. Акція для постійних клієнтів!"],
[44, "en", "Treat yourself to the flavor of the summer cold in winter! New Arrivals aromatic candles. Special offer for regular customers!"],

[45, "ru", "Billiard.ua"],
[45, "ua", "Billiard.ua"],
[45, "en", "Billiard.ua"],

[46, "ru", "Любителям бильярда! У нас вы найдете любую интересующую вас информацию. Новости, турниры, самые известные клубы и рейтинги. Будьте в курсе самых интересных событий любимой игры!"],
[46, "ua", "Любителям більярду! У нас ви знайдете будь-яку цікаву для вас інформацію. Новини, турніри, найвідоміші клуби і рейтинги. Будьте в курсі найцікавіших подій улюбленої гри!"],
[46, "en", "Fans of billiards! Here you will find all the information you need. News, tournaments, the most famous clubs and ratings. Be aware of the most exciting events of your favorite games!"],

[47, "ru", "Pugach.com.ua"],
[47, "ua", "Pugach.com.ua"],
[47, "en", "Pugach.com.ua"],

[48, "ru", "Мой дом - моя крепость. Создайте свою с помощью нашей дизайн студии. Воплощение вашим идей ляжет на наши плечи, а вам остается только наслаждаться результатом."],
[48, "ua", "Мій дім - моя фортеця. Створіть свою за допомогою нашої дизайн студії. Втілення ваших ідей ляже на наші плечі, а вам залишається тільки насолоджуватися результатом."],
[48, "en", "My home is my castle. Create your own with the help of our design studio. The embodiment of your ideas is only our deal, and you will just enjoy the results."],

[49, "ru", "Mebel Fashion"],
[49, "ua", "Mebel Fashion"],
[49, "en", "Mebel Fashion"],

[50, "ru", "Mebel Fashion позволит создать уют в вашем доме без каких либо усилий. Готовые каталоги интерьера позволят сэкономить ваше время. Качественная продукция, проверенный временем производитель, доступные цены - все это можно сказать именно о нас."],
[50, "ua", "Mebel Fashion дозволить створити затишок у вашому будинку без будь-яких зусиль. Готові каталоги інтер'єру дозволять заощадити ваш час. Якісна продукція, перевірений часом виробник, доступні ціни - все це можна сказати саме про нас."],
[50, "en", "Mebel Fashion will create comfort in your home, without any effort. Finished Interior catalogs will save you time. Quality products, time tested manufacturer, affordable prices - it is all about us."],

[51, "ru", "Лучшие образовательные программы, индивидуальный подход к каждому студенту, летние школы от лучших ВУЗов мира. Реализуйте свои возможности с нами. The Academic Advisor - ваш путь к успеху!"],
[51, "ua", "Кращі освітні програми, індивідуальний підхід до кожного студента, літні школи від кращих ВНЗ світу. Реалізуйте свої можливості з нами. The Academic Advisor - ваш шлях до успіху!"],
[51, "en", "The best educational programs, individual approach to each student, summer school from the best universities in the world. Realize your opportunities with us. The Academic Advisor is your way to success!"],

[52, "ru", "Бан-лист"],
[52, "ua", "Бан-лист"],
[52, "en", "Ban-list"],

[53, "ru", "30.09.2016. Шок-контент"],
[53, "ua", "30.09.2016. Шок-контент"],
[53, "en", "30.09.2016. Shock-content"],

[54, "ru", "01.10.2016. Нецензурная лексика в рекламе"],
[54, "ua", "01.10.2016. Нецензурна лексика в рекламі"],
[54, "en", "01.10.2016. Profanity in ads"],

[55, "ru", "02.10.2016. Пропаганда нездорового образа жизни"],
[55, "ua", "02.10.2016. Пропаганда нездорового способу життя"],
[55, "en", "02.10.2016. Promotion of unhealthy lifestyles"],

[56, "ru", "10.10.2016. Шок-контент"],
[56, "ua", "10.10.2016. Шок-контент"],
[56, "en", "10.10.2016. Shock-content"],

[57, "ru", "14.10.2016. Противоречие Конституции"],
[57, "ua", "14.10.2016. Протиріччя Конституції"],
[57, "en", "14.10.2016. The contradiction of the Constitution"],

[58, "ru", "Добро пожаловать в режим администратора!"],
[58, "ua", "Ласкаво просимо в режим адміністратора!"],
[58, "en", "Wellcome admin mode"],

[59, "ru", "PORSCHE Cayenne"],

[60, "ru", "Мир меняется. Наши принципы – нет."],

[61, "ru", "AQUA MINERALE"],

[62, "ru", "Всегда на высоте."],

[63, "ru", "CANADIAN BLOOD SERVICES"],

[64, "ru", "Это в твоих силах – дать кровь."],

[65, "ru", "СКОЛКОВО (SKOLKOVO)"],

[66, "ru", "Будь умным. Даже хитрым."],

[67, "ru", "PERFECT FIT"],

[68, "ru", "Знает характер вашей кошки."],

[69, "ru", "RITTER SPORT"],

[70, "ru", "Качество в квадрате."],

[71, "ru", "Интурист"],

[72, "ru", "80 лет вокруг света."],

[73, "ru", "FOTOLIA.COM"],

[74, "ru", "Вся власть пикселям!"],

[75, "ru", "Менеджемент"],
[75, "ua", "Менеджемент"],
[75, "en", "Management"],

[76, "ru", "Модерация"],
[76, "ua", "Модерація"],
[76, "en", "Moderation"],

               ]);
    }

    public function safeDown()
    {
        $this->delete("message");
        $this->delete("source_message");
    }
}
