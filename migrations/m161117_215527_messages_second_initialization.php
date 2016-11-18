<?php

use yii\db\Migration;

class m161117_215527_messages_second_initialization extends Migration
{
    public function safeUp()
    {
        $this->batchInsert("source_message",["category","message"],
            [["app", "user_profile_without_menu_welcome"],
                ["app", "user_profile_without_menu_share_1"],
                ["app", "user_profile_without_menu_share_2"],
                ["app", "user_profile_without_menu_share_3"],
                ["app", "user_profile_without_menu_ad_1_title"],
                ["app", "user_profile_without_menu_ad_1_nick"],
                ["app", "user_profile_without_menu_ad_1_date"],
                ["app", "user_profile_without_menu_ad_1_description"],
                ["app", "user_profile_without_menu_ad_2_title"],
                ["app", "user_profile_without_menu_ad_2_nick"],
                ["app", "user_profile_without_menu_ad_2_date"],
                ["app", "user_profile_without_menu_ad_2_description"],
                ["app", "user_profile_without_menu_ad_3_title"],
                ["app", "user_profile_without_menu_ad_3_nick"],
                ["app", "user_profile_without_menu_ad_3_date"],
                ["app", "user_profile_without_menu_ad_3_description"],
                ["app", "user_profile_without_menu_ad_4_title"],
                ["app", "user_profile_without_menu_ad_4_nick"],
                ["app", "user_profile_without_menu_ad_4_date"],
                ["app", "user_profile_without_menu_ad_4_description"],
                ["app", "user_profile_without_menu_ad_5_title"],
                ["app", "user_profile_without_menu_ad_5_nick"],
                ["app", "user_profile_without_menu_ad_5_date"],
                ["app", "user_profile_without_menu_ad_5_description"],
                ["app", "user_profile_without_menu_ad_6_title"],
                ["app", "user_profile_without_menu_ad_6_nick"],
                ["app", "user_profile_without_menu_ad_6_date"],
                ["app", "user_profile_without_menu_ad_6_description"],
                ["app", "unauthorized_user_nick"],
                ["app", "unauthorized_user_about"],
                ["app", "unauthorized_user_ad_1_title"],
                ["app", "unauthorized_user_ad_1_date"],
                ["app", "unauthorized_user_ad_1_description"],
                ["app", "unauthorized_user_ad_2_title"],
                ["app", "unauthorized_user_ad_2_date"],
                ["app", "unauthorized_user_ad_2_description"],
                ["app", "unauthorized_user_ad_3_title"],
                ["app", "unauthorized_user_ad_3_date"],
                ["app", "unauthorized_user_ad_3_description"],
                ["app", "unauthorized_user_ad_4_title"],
                ["app", "unauthorized_user_ad_4_date"],
                ["app", "unauthorized_user_ad_4_description"],
                ["app", "unauthorized_user_ad_5_title"],
                ["app", "unauthorized_user_ad_5_date"],
                ["app", "unauthorized_user_ad_5_description"],
                ]);



                $this->batchInsert("message",["id","language","translation"],
                    [
                        [77, "ru", "Добро пожаловать в мир быстрой рекламы и прибыльного маркетинга! У нас вы можете найти самые выгодные условия для эффективного распространения информации о вашем товаре или услуге среди потенциальных клиентов в интернете, а также получить круглосуточный контроль над наблюдением за успешностью ваших идей среди пользователей сети. Используйте созданную ранее учетную запись или же создайте новую чтобы начать работу с рекламой и получить больше информации и предложений именно для вас."],
                        [77, "ua", "Ласкаво просимо в світ швидкої реклами та прибуткового маркетингу! У нас ви можете знайти найвигідніші умови для ефективного поширення інформації про ваш товар або послугу серед потенційних клієнтів в інтернеті, а також отримати цілодобовий контроль над спостереженням за успішністю ваших ідей серед користувачів мережі. Використовуйте створений раніше аккаунт або ж створіть новий, щоб почати роботу з рекламою і отримати більше інформації та пропозицій саме для вас."],
                        [77, "en", "Welcome to the world of fast advertising and profitable marketing! Here you can find the most favorable conditions for the effective spreading of information about your product or service among potential customers on the Internet, as well as get non-stop control of the observation of the success of your ideas among network users. Use an account that you created earlier, or create a new one, to get started with ads and get more information and suggestions for you."],

                        [78, "ru", "Горячая неделя : Закажите рекламу до 18 числа этого месяца и получите скидку в 30 процентов! *Скидка предоставляется на первый из заказов сделанный в этот промежуток времени."],
                        [78, "ua", "Гарячий тиждень: Замовте рекламу до 18 числа цього місяця і отримаєте знижку в 30 відсотків! * Знижка надається на перше з замовлень зроблених в цей проміжок часу."],
                        [78, "en", "Hot Week: Make ads to 18 of this month and get a discount of 30 per cent! * Discount applies to the first of the orders made in this period of time."],

                        [79, "ru", "Быстрый старт: Сделайте свой первый заказ и получите бесплатное одноразовое продление услуги"],
                        [79, "ua", "Швидкий старт: Зробіть своє перше замовлення і отримайте безкоштовне одноразове продовження послуги"],
                        [79, "en", "Fast start: Make your first order and receive a free one-time extension of services"],

                        [80, "ru" , "Рождественский сюрприз! Получите скидку 25%, сделав заказ до 20 декабря"],
                        [80, "ua", "Різдвяний сюрприз! Отримайте знижку 25%, зробивши замовлення до 20 грудня"],
                        [80, "en", "Christmas Surprise! Get 25% discount by ordering before December 20"],

                        [81, "ru", "Кофе «Happy oldie»"],
                        [81, "ua", "Кава «Happy oldie»"],
                        [81, "en", "Coffee «Happy oldie»"],

                        [82, "ru", "Chris Boom"],
                        [82, "ua", "Chris Boom"],
                        [82, "en", "Chris Boom"],

                        [83, "ru", "15.10.2016"],
                        [83, "ua", "15.10.2016"],
                        [83, "en", "15.10.2016"],

                        [84, "ru", "70% людей планеты начинают свое утро с бодрящего и вкусного напитка – кофе! Но ты считаешь, что в преклонном возрасте пора отказаться от кофе? Не спеши! Ученые из Университета Бристоля (Великобритания) изучили вопрос влияния кофеина на когнитивные способности людей в пожилом возрасте. Исследователи пришли к выводу, что кофе улучшает время реакции, и люди реже ошибались при прохождении тестов на внимание. Пей кофе «Happy oldie» и оставайся молодым и бодрым всегда!"],
                        [84, "ua", "70% людей планети починають свій ранок з підбадьорливого і смачного напою - кави! Але ти вважаєш, що в похилому віці пора відмовитися від кави? Не поспішай! Вчені з Університету Брістоля (Велика Британія) вивчили питання впливу кофеїну на когнітивні здібності людей в літньому віці. Дослідники прийшли до висновку, що кава покращує час реакції, і люди рідше помилялися при проходженні тестів на увагу. Пий каву «Happy oldie» і залишайся молодим і бадьорим завжди!"],
                        [84, "en", "70% of people in the world start their morning with a refreshing and tasty drink - coffee! But do you think that in old age, it is time to give up coffee? Do not rush! Scientists from the University of Bristol (UK), studied the question of caffeine effect on cognitive ability of older people. The researchers concluded that coffee improves the reaction time, and people rarely wrong when passing tests for attention. Drink coffee «Happy oldie» and stay young and cheerful always!"],

                        [85, "ru", "Сайт книжных каталогов «Bookwyrm»"],
                        [85, "ua", "Сайт книжкових каталогів «Bookwyrm»"],
                        [85, "en", "The site of book catalogs «Bookwyrm»"],

                        [86, "ru", "Cinderella"],
                        [86, "ua", "Cinderella"],
                        [86, "en", "Cinderella"],

                        [87, "ru", "28.10.2016"],
                        [87, "ua", "28.10.2016"],
                        [87, "en", "28.10.2016"],

                        [88, "ru", "Человек - это продукт чтения! И хотя в современности большинство людей получают информацию благодаря сети интернет, многие согласятся что машина не может заменить теплого чувства перелистывания страниц любимой книги. У нас вы можете найти полюбившуюся классику в новой оправе или же что-нибудь из современной литературы для своего удовольствия."],
                        [88, "ua", "Людина - це продукт читання! І хоча в сучасності більшість людей отримують інформацію завдяки мережі інтернет, багато хто погодиться що машина не може замінити теплого почуття перегортання сторінок улюбленої книги. У нас ви можете знайти улюблену класику в новій оправі або ж що-небудь із сучасної літератури для свого задоволення."],
                        [88, "en", "Man - is the product of reading! Although in the present, most people get their information through the Internet, many will agree that the machine can not replace the warm feeling of flipping the pages of a favorite book. Here you can find beloved classic literature by the new frame, or something among the contemporary literature for pleasure."],

                        [89, "ru", "Сайт знакомств «Hotbabes.ru»"],
                        [89, "ua", "Сайт знайомств «Hotbabes.ru»"],
                        [89, "en", "Dating Site «Hotbabes.ru»"],

                        [90, "ru", "Snow White"],
                        [90, "ua", "Snow White"],
                        [90, "en", "Snow White"],

                        [91, "ru", "21.10.2016"],
                        [91, "ua", "21.10.2016"],
                        [91, "en", "21.10.2016"],

                        [92, "ru", "Любовь сильное и светлое чувство! Вы мечтаете полюбить, но боитесь обмана? Тогда мы поможем Вам! Наш сайт отличает сочетание простоты и удобства интерфейса с качественной организацией онлайн знакомств. Сайт призван объединить и мужчин, и женщин из разных стран разного возраста, и расовой принадлежности."],
                        [92, "ua", "Любов сильне і світле почуття! Ви мрієте полюбити, але боїтеся обману? Тоді ми допоможемо Вам! Наш сайт відрізняє поєднання простоти і зручності інтерфейсу з якісною організацією онлайн знайомств. Сайт покликаний об'єднати і чоловіків, і жінок з різних країн різного віку, і расової приналежності."],
                        [92, "en", "Love is strong and light feeling! You want to love, but are afraid of fraud? Then we can help you! Our site features a combination of simplicity and ease of interface with high-quality online dating organization. The site aims to unite men and women from different countries of different age, and race."],

                        [93, "ru", "Мужской помощник «Happy hand»"],
                        [93, "ua", "Чоловічий помічник «Happy hand»"],
                        [93, "en", "Male Assistant «Happy hand»"],

                        [94, "ru", "Jack White"],
                        [94, "ua", "Jack White"],
                        [94, "en", "Jack White"],

                        [95, "ru", "24.10.2016"],
                        [95, "ua", "24.10.2016"],
                        [95, "en", "24.10.2016"],

                        [96, "ru", "Ты настоящий мужчина, мастер – «золотые руки»? Тогда «Happy hand» – это то что тебе нужно!
                Универсальный помощник в домашнем хозяйстве:
                -  заменяет целый ряд специализированных инструментов,
                - многократно облегчает задачи демонтажа элементов строительных конструкций и различных видов отделки, 
                - оптимизирует выполнение полировки, резки и пр. 
                - может работать с любыми материалами: деревом, бетоном, пластмассами.
                Спеши! «Золотых рук» много, а Happy hand – один!"],
                        [96, "ua", "Ти справжній чоловік, майстер - «золоті руки»? Тоді «Happy hand» - це те що тобі потрібно!
                Універсальний помічник в домашньому господарстві:
                - Замінює цілий ряд спеціалізованих інструментів,
                - Багаторазово полегшує завдання демонтажу елементів будівельних конструкцій і різних видів обробки,
                - Оптимізує виконання полірування, різання та ін.
                - Може працювати з будь-якими матеріалами: деревом, бетоном, пластмасами.
                Поспішай! «Золотих рук» багато, а Happy hand - один!"],
                        [96, "en", "You're a real man, the master - «golden hands»? Then «Happy hand» - this is what you need!
                    The universal helper in the household:
                - Replaces a number of specialized tools,
                - Repeatedly eases the task of dismantling structural elements and different types of finishes,
                - Optimizes the performance of polishing, cutting and so on.
                    - Can work with any material: wood, concrete, plastics.
                    Hurry! There are many «Golden hands» and Happy hand is only one!"],

                        [97, "ru", "Пельмени «Горячие орешки»!"],
                        [97, "ua", "Пельмені «Гарячі горішки»!"],
                        [97, "en", "Pelmeni «Hot Nuts!»"],

                        [98, "ru", "Moomoo"],
                        [98, "ua", "Moomoo"],
                        [98, "en", "Moomoo"],

                        [99, "ru", "28.10.2016"],
                        [99, "ua", "28.10.2016"],
                        [99, "en", "28.10.2016"],

                        [100, "ru", "Есть в мире много удовольствий…
                Но для гурманов, знающих толк в  наслажденях.
                    Предлагаем блюдо, вкус которого доводит до экстаза!
                    Итак, пельмени «Горячие орешки»!
                    Пельмени малые, большие, среднего размера,
                Понравятся как суровым мужчинам так и красивым дамам."],
                        [100, "ua", "Є в світі багато задоволень ...
                Але для гурманів, які знають толк в насолоді.
                    Пропонуємо страву, смак якої доводить до екстазу!
                    Отже, пельмені «Гарячі горішки»!
                    Пельмені малі, великі, середнього розміру,
                Сподобаються як суворим чоловікам так і красивим жінкам."],
                        [100, "en", "There are many pleasures in the world ...
                But for foodies who know a lot about enjoyment.
                    We offer the dish, the taste of which brings to ecstasy!
                    So, pelmeni «Hot Nuts!»
                Pelmeni of small, large, medium size,
                Harsh men and beautiful ladies will love it."],

                        [101, "ru", "Агентство «Радужная сфера»"],
                        [101, "ua", "Агентство «Райдужна сфера»"],
                        [101, "en", "The Agency «Rainbow sphere»"],

                        [102, "ru", "Drunken Whaler"],
                        [102, "ua", "Drunken Whaler"],
                        [102, "en", "Drunken Whaler"],

                        [103, "ru", "30.10.2016"],
                        [103, "ua", "30.10.2016"],
                        [103, "en", "30.10.2016"],

                        [104, "ru", "Мы  Вам наполним шар воздушный Теплом дыхания души… А так же оформим воздушными шарами свадьбы, юбилеи, дни рождения, выписку из роддома, праздники в детских садах и школах, корпоративные и тематические мероприятия! Цветы, букеты, фигуры сказочных героев из воздушных шаров! Устрой Праздник Радости своим близким и себе! Шары из тонкого латекса используются по частной просьбе."],
                        [104, "ua", "Ми Вам наповнимо кулю повітряну Теплом дихання душі ... А також оформимо повітряними кулями весілля, ювілеї, дні народження, виписку з пологового будинку, свята в дитячих садах і школах, корпоративні та тематичні заходи! Квіти, букети, фігури казкових героїв з повітряних куль! Влаштуй Свято Радості своїм близьким і собі! Кулі з тонкого латексу використовуються за приватним проханням."],
                        [104, "en", "We will fill balloon with warm breath of the soul ... And also arrange air balls wedding, anniversaries, birthdays, a statement from the hospital, holidays in kindergartens and schools, corporate and special events! Flowers, bouquets, figures of fantastic heroes from balloons! Arrange a feast of joy to loved ones and yourself! Balls made of thin latex used by private request."],

                        [105, "ru", "Your honey cat"],
                        [105, "ua", "Your honey cat"],
                        [105, "en", "Your honey cat"],

                        [106, "ru", "Your honey cat - творческая личность, увлекаюсь альпинизмом. Интересы: туризм, парашютный спорт. Круг рекламных интересов разнообразный: от сладостей до креативных агентств."],
                        [106, "ua", "Your honey cat - творча особистість, захоплююся альпінізмом. Інтереси: туризм, парашутний спорт. Коло рекламних інтересів різноманітний: від солодощів до креативних агентств."],
                        [106, "en", "Your honey cat - a creative person, fond of mountaineering. Interests: hiking, parachuting. The terms of advertising interests varied: from sweets to creative agencies."],

                        [107, "ru", "Средство для очистки языка «Naughty tongue»"],
                        [107, "ua", "Засіб для очищення язика «Naughty tongue»"],
                        [107, "en", "Tongue cleaner «Naughty tongue» "],

                        [108, "ru", "15.09.2016"],
                        [108, "ua", "15.09.2016"],
                        [108, "en", "15.09.2016"],

                        [109, "ru", "Очистка языка является такой же древней, как и очистка зубов. Это необходимый ритуал личной гигиены. Для очистки поверхности языка ты все еще применяешь обычную зубную щетку? Забудь, все это прошлый век! Скребок «Naughty tongue» имеет ровную поверхность, которая скребет. К нему в набор добавлены насадки с разными щетками, преимущественно круглой и серповидной формы, с более короткой и более жесткой щетиной. Скребок чистит -  язык радуется!"],
                        [109, "ua", "Очищення язика є такою ж давньою традицією, як і очищення зубів. Це необхідний ритуал особистої гігієни. Для очищення поверхні язика ти все ще застосовуєш звичайну зубну щітку? Забудь, все це минуле століття! Засіб «Naughty tongue» має рівну поверхню, яка шкребе. До нього в набір додані насадки з різними щітками, переважно круглої і серповидної форми, з коротшою і більш жорсткою щетиною. «Naughty tongue» - язик радіє!"],
                        [109, "en", "Cleaning the tongue is as old as and cleaning teeth. This is a necessary ritual for personal care. Are you still using an ordinary toothbrush for cleaning your mouth? Forget all the past! Scraper «Naughty tongue» has a smooth surface that scrapes. There are also different brushes added to the set with different nozzles, preferably circular and crescent-shaped, and the shorter more stiff bristles. Scraper cleans - tongue rejoices!"],

                        [110, "ru", "Клининговая компания «Clean nipples»"],
                        [110, "ua", "Клінінгова компанія «Clean nipples»"],
                        [110, "en", "The cleaning company «Clean nipples»"],

                        [111, "ru", "18.09.2016"],
                        [111, "ua", "18.09.2016"],
                        [111, "en", "18.9.2016"],

                        [112, "ru", "Специализируется на профессиональной чистке и уборке любой сложности помещений или существ любого типа и предлагает услуги комплексной уборки:
                •	генеральная уборка помещения или существа:
                •	уборка строительного мусора или отходов жизнедеятельности;
                Мы любим, когда вы хорошо пахнете!"],
                        [112, "ua", "Спеціалізується на професійному чищенню і прибирання будь-якої складності приміщень або істот будь-якого типу і пропонує послуги комплексного прибирання:
                • генеральне прибирання приміщення або істоти:
                • прибирання будівельного сміття або відходів життєдіяльності;
                Ми любимо, коли ви добре пахнете!"],
                        [112, "en", "It specializes in the professional cleaning of any space or creatures and offers a comprehensive cleaning:
                • General cleaning of premises, or being:
                • Cleaning of construction debris or excreta;
                We love it when you smell good!"],

                        [113, "ru", "Раскрутка сайтов от «Mysterious monkeys»"],
                        [113, "ua", "Розкрутка сайтів від «Mysterious monkeys»"],
                        [113, "en", "Promotion of sites by «Mysterious monkeys»"],

                        [114, "ru", "19.09.2016"],
                        [114, "ua", "19.09.2016"],
                        [114, "en", "19.9.2016"],

                        [115, "ru", "Вы желаете начать легко зарабатывать деньги в интернете но при этом не имеете ничего общего с маркетингом или программированием? Мы все сделаем за вас и создадим хороший сайт который будет пользоваться популярностью у всех ваших знакомых!! От вас требуется только идея.. и деньги."],
                        [115, "ua", "Ви бажаєте почати легко заробляти гроші в інтернеті але при цьому не маєте нічого спільного з маркетингом або програмуванням? Ми все зробимо за вас і створимо хороший сайт який буде користуватися популярністю у всіх ваших знайомих !! Від вас вимагається лише ідея .. і гроші."],
                        [115, "en", "You want to start it easy to money making on the Internet but do not have anything to do with marketing or programming? We will do everything for you and create a good website that will be popular with all of your friends !! All you need is just an idea .. and money."],

                        [116, "ru", "Магазин техники «Стальной гигант»"],
                        [116, "ua", "Магазин техніки «Сталевий гігант»"],
                        [116, "en", "Device shop «The Iron Giant»"],

                        [117, "ru", "21.09.2016"],
                        [117, "ua", "21.09.2016"],
                        [117, "en", "21.9.2016"],

                        [118, "ru", "Ищешь телефон такого размера, чтобы настоящему мачо как ты не было стыдно вытащить его при людях или быть может ищешь домашний кинотеатр такой ширины чтобы девушки вздыхали в наслаждении при виде твоего гиганта? Тогда ты попал куда надо, мы поможем подобрать тебе нужное устройство."],
                        [118, "ua", "Шукаєш телефон такого розміру, щоб справжньому мачо як ти не було соромно витягнути його при людях або можливо шукаєш домашній кінотеатр такої ширини щоб дівчата зітхали в насолоді побачивши твого гіганта? Тоді ти потрапив куди треба, ми допоможемо підібрати тобі потрібний пристрій."],
                        [118, "en", "Looking for a phone of this size that really macho as you are would not be ashamed to get out in front of people or maybe looking for a home theater so wide that girls sighed in pleasure at the sight of your giant? Then you came to the right place, we will help you choose the right device."],

                        [119, "ru", "Сайт фотостудии «Cringe moment»"],
                        [119, "ua", "Сайт фотостудії «Cringe moment»"],
                        [119, "en", "Photo studio Website «Cringe moment»"],

                        [120, "ru", "24.09.2016"],
                        [120, "ua", "24.09.2016"],
                        [120, "en", "24.9.2016"],

                        [121, "ru", "Хочешь сделать пару хороших фото с любимой компанией или семьей, но тебя бесят однотипные фотографии которые выкладывают пользователи социальных сетей? Мы можем устроить тебе такую фотосессию, которой точно ни у кого не было и получить много удачных и не очень фото чтобы все знали какой ты оригинальный и классный."],
                        [121, "ua", "Хочеш зробити пару хороших фото з улюбленою компанією або сім'єю, але тебе дратують однотипні фотографії які викладають користувачі соціальних мереж? Ми можемо влаштувати тобі таку фотосесію, якоїй точно ні у кого не було і отримати багато вдалих і не дуже фото щоб всі знали який ти оригінальний і класний."],
                        [121, "en", "Do you want to make a couple of good photos with your beloved friends or family, but you are enraged by the same type of photos that spread users of social networks? We can arrange you a photo shoot, which precisely no one had before with a lot of good and not-so pictures to let everyone know how original and classy can you be..."],

                    ]);
    }

    public function safeDown()
    {
        $this->delete("message");
        $this->delete("source_message");
    }
}
