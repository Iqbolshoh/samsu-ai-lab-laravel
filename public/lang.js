const translations = {
    uz: {
        nav: {
            home: 'Bosh sahifa',
            about: 'Biz haqimizda',
            projects: 'SI Loyihalar',
            members: 'A\'zolar',
            news: 'Yangiliklar',
            achievements: 'Yutuqlar',
        },
        home: {
            title: 'Sun\'iy Intellekt',
            subtitle: 'Laboratoriyasi',
            description: 'Samarqand davlat universitetida sun\'iy intellekt tadqiqotlari va innovatsiyalari',
            exploreProjects: 'SI Loyihalarni ko\'rish',
            learnMore: 'Batafsil',
            stats: {
                projects: 'Tadqiqot SI loyihalari',
                members: 'Jamoa a\'zolari',
                publications: 'Nashrlar',
                partnerships: 'Hamkorliklar',
            },
            whatWeDo: {
                title: 'Biz nima qilamiz',
                subtitle: 'Sun\'iy intellekt tadqiqotlari va ta\'limida etakchilik qilmoqdamiz',
                research: {
                    title: 'Ilg\'or tadqiqot',
                    description: 'Mashinali o\'rganish, chuqur o\'rganish va neyron tarmoqlarida zamonaviy sun\'iy intellekt tadqiqotlari.',
                },
                innovation: {
                    title: 'Innovatsiya markazi',
                    description: 'Sun\'iy intellekt texnologiyalari orqali real muammolarga innovatsion yechimlar yaratish.',
                },
                collaboration: {
                    title: 'Hamkorlik',
                    description: 'Dunyo bo\'ylab sanoat liderlari va akademik muassasalar bilan hamkorlik qilish.',
                },
                growth: {
                    title: 'Kelajak o\'sishi',
                    description: 'Sun\'iy intellekt tadqiqotchilari va mutaxassislarining keyingi avlodini tayyorlash.',
                },
            },
            cta: {
                title: 'Tadqiqot jamoamizga qo\'shiling',
                description: 'Ilg\'or sun\'iy intellekt tadqiqotlarining bir qismi bo\'ling va texnologiya kelajagini shakllantiring',
                button: 'Ishtirok eting',
            },
        },
        about: {
            title: 'Bizning laboratoriya haqida',
            subtitle: 'Samarqand davlat universiteti sun\'iy intellekt laboratoriyasi sun\'iy intellekt tadqiqotlari va ta\'limini rivojlantirishga bag\'ishlangan.',
            mission: {
                title: 'Missiyamiz',
                description: 'Sun\'iy intellekt tadqiqotlari va ta\'limini rivojlantirish, ilmiy bilimlarga va jamiyat uchun foydali amaliy dasturlarga hissa qo\'shish.',
            },
            vision: {
                title: 'Viziyamiz',
                description: 'Markaziy Osiyoda sun\'iy intellekt tadqiqotlari bo\'yicha etakchi markaz bo\'lish, innovatsiyalarni rivojlantirish va jahon darajasidagi sun\'iy intellekt mutaxassislarini tayyorlash.',
            },
            excellence: {
                title: 'Mukammallik',
                description: 'Biz tadqiqot, ta\'lim va kasbiy rivojlanishda eng yuqori standartlarni saqlaymiz, barcha ishlarimizda mukammallikka intilamiz.',
            },
            education: {
                title: 'Ta\'lim',
                description: 'Biz keng qamrovli ta\'lim dasturlari orqali sun\'iy intellekt tadqiqotchilari va mutaxassislarining keyingi avlodini tayyorlashga sodiqmiz.',
            },
            researchAreas: {
                title: 'Tadqiqot yo\'nalishlari',
                subtitle: 'Bizning laboratoriya sun\'iy intellektning bir nechta sohalarida ilg\'or tadqiqotlar olib boradi',
                areas: [
                    'Mashinali o\'rganish va chuqur o\'rganish',
                    'Tabiiy tilni qayta ishlash',
                    'Kompyuter ko\'rishi',
                    'Robotika va avtomatlashtirish',
                    'Neyron tarmoqlar',
                    'Ma\'lumotlar fani va tahlil',
                    'Sun\'iy intellekt etikasi va xavfsizligi',
                    'Mustahkamlovchi o\'rganish',
                ],
            },
            story: {
                title: 'Bizning tarixamiz',
                text: 'Samarqand davlat universitetining texnologik taraqqiyotga sodiqligi doirasida tashkil etilgan sun\'iy intellekt laboratoriyamiz innovatsiya va mukammallik markaziga aylandi., Bizning fidoyi tadqiqotchilar va talabalar jamoamiz sun\'iy intellekt bilan nimalarga erishish mumkinligini kengaytiruvchi ilg\'or SI loyihalar ustida ishlaydi. Biz dunyo bo\'ylab etakchi muassasalar bilan hamkorlik qilamiz va global sun\'iy intellekt tadqiqot jamiyatiga hissa qo\'shamiz., Tadqiqotlarimiz, ta\'lim dasturlarimiz va sanoat hamkorliklarimiz orqali biz sun\'iy intellekt sohasiga muhim hissa qo\'shishni va O\'zbekiston va undan tashqarida sun\'iy intellekt liderlarining keyingi avlodini tarbiyalashni maqsad qilganmiz.',
            },
            cta: {
                title: 'Loyihalarimizni ko\'ring',
                subtitle: 'Sun\'iy intellekt sohasidagi ilg\'or tadqiqot loyihalarimizni kashf eting va kelajak texnologiyalarini yaratishda bizga qo\'shiling',
            },
        },
        projects: {
            title: 'Bizning SI loyihalar',
            subtitle: 'Sun\'iy intellekt chegaralarini kengaytiruvchi ilg\'or tadqiqot SI loyihalarimizni kashf eting',
            filter: 'Filtr',
            allProjects: 'Barcha SI loyihalar',
            status: {
                ongoing: 'Davom etmoqda',
                completed: 'Yakunlangan',
            },
            projectList: [
                {
                    title: 'O\'zbek tilini qayta ishlash',
                    description: 'O\'zbek tili uchun ilg\'or tabiiy tilni qayta ishlash tizimi, shu jumladan hissiyot tahlili va matn yaratish.',
                },
                {
                    title: 'Aqlli qishloq xo\'jaligi tizimi',
                    description: 'Kompyuter ko\'rishi va mashinali o\'rganish yordamida ekinlarni kuzatish va hosilni bashorat qilish uchun sun\'iy intellektga asoslangan tizim.',
                },
                {
                    title: 'Tibbiy tasvir tahlili',
                    description: 'Tibbiy tasvir ma\'lumotlaridan avtomatik diagnostika va kasalliklarni aniqlash uchun chuqur o\'rganish modellari.',
                },
                {
                    title: 'Avtonom navigatsiya roboti',
                    description: 'Murakkab muhitlarda avtonom robotlar uchun aqlli navigatsiya tizimlarini ishlab chiqish.',
                },
                {
                    title: 'Transport oqimini optimallashtirish',
                    description: 'Real vaqt ma\'lumotlarini qayta ishlash orqali shahar transport naqshlarini tahlil qilish va optimallashtirish uchun sun\'iy intellekt tizimi.',
                },
                {
                    title: 'Yuz tanish tizimi',
                    description: 'Xavfsizlik va identifikatsiya dasturlari uchun yuqori aniqlikka ega ilg\'or yuzni tanish texnologiyasi.',
                },
            ],
            learnMore: 'Batafsil',
            noProjects: 'Ushbu toifada SI loyihalar topilmadi.',
            cta: {
                title: 'Loyiha g\'oyangiz bormi?',
                subtitle: 'Biz har doim yangi vazifalar va hamkorlik imkoniyatlarini qidirmoqdamiz',
                button: 'Biz bilan bog\'laning',
            },
        },
        members: {
            title: 'A\'zolar',
            subtitle: 'Sun\'iy intellekt laboratoriyamizda innovatsiyani rivojlantirayotgan iqtidorli shaxslar bilan tanishing',
            leadership: {
                title: 'Rahbariyat va tadqiqot jamoasi',
                subtitle: 'Bizning fidoyi tadqiqotchilar va muhandislar jamoamiz',
            },
            roles: {
                director: 'Laboratoriya direktori',
                seniorResearcher: 'Katta tadqiqotchi',
                leadEngineer: 'Bosh sun\'iy intellekt muhandisi',
                researchScientist: 'Tadqiqotchi olim',
                roboticsEngineer: 'Robotika muhandisi',
                dataScientist: 'Ma\'lumotlar olimi',
            },
            bios: [
                'Kompyuter fanlari bo\'yicha fan doktori, chuqur o\'rganish va neyron tarmoqlar bo\'yicha mutaxassis',
                'Tabiiy tilni qayta ishlash va hisoblash tilshunosligi bo\'yicha mutaxassis',
                'Kompyuter ko\'rishi va tasvir qayta ishlash bo\'yicha mutaxassis',
                'Sog\'liqni saqlashda mashinali o\'rganish dasturlariga e\'tibor',
                'Aqlli avtonom tizimlar va robotikani ishlab chiqish',
                'Ma\'lumotlar tahlili va bashorat modellashtirishda mutaxassis',
            ],
            students: {
                title: 'Bizning talabalar',
                subtitle: 'Sun\'iy intellekt mutaxassislarining keyingi avlodini tayyorlash',
                stats: {
                    masters: 'Magistratura talabalari: 25+',
                    doctoral: 'Doktorantura nomzodlari: 8',
                    undergraduate: 'Bakalavr tadqiqotchilari: 30+',
                    international: 'Xorijiy talabalar: 5',
                },
            },
            join: {
                title: 'Jamoamizga qo\'shiling',
                description: 'Biz har doim sun\'iy intellektga ishtiyoqli iqtidorli tadqiqotchilar, muhandislar va talabalarni qidirmoqdamiz. Agar siz bizning laboratoriyamizga qo\'shilishdan manfaatdor bo\'lsangiz, sizdan eshitishni istardik.',
                applyNow: 'Hozir ariza yuboring',
                learnMore: 'Batafsil',
            },
            collaboration: {
                title: 'Hamkorlik imkoniyatlari',
                description: 'Biz dunyo bo\'ylab sanoat hamkorlari, akademik muassasalar va tadqiqot tashkilotlari bilan hamkorlikni mamnuniyat bilan qabul qilamiz.',
                button: 'Biz bilan hamkorlik qiling',
            },
        },
        news: {
            title: 'Yangiliklar',
            subtitle: 'Sun\'iy intellekt laboratoriyasidagi so\'nggi yangiliklar, tadbirlar va yutuqlar bilan tanishing',
            readMore: 'Batafsil',
            categories: {
                1: 'Tadqiqot',
                2: 'Tadbir',
                3: 'Mukofot',
                4: 'Hamkorlik',
                5: 'Nashr',
            },
            items: [
                {
                    title: 'Yangi chuqur o\'rganish arxitekturasi taqdim etildi',
                    description: 'Bizning tadqiqot jamoamiz tabiiy tilni qayta ishlash uchun yangi neyron tarmog\'i arxitekturasini ishlab chiqdi va nashr etdi.',
                },
                {
                    title: 'Sun\'iy intellekt seminarida muvaffaqiyatli ishtirok',
                    description: 'Bizning laboratoriya xalqaro sun\'iy intellekt seminari uchun muhim dastur bo\'ldi, dunyo bo\'ylab 200 dan ortiq ishtirokchilarni jalb qildi.',
                },
                {
                    title: 'Ilg\'or texnologiyalar bo\'yicha davlat grantini qo\'lga kiritdi',
                    description: 'Biz tibbiy sun\'iy intellekt dasturlari bo\'yicha tadqiqot loyihamiz uchun davlat grantini olishdan mamnunmiz.',
                },
                {
                    title: 'Etakchi texnologiya kompaniyasi bilan yangi hamkorlik',
                    description: 'Bizning laboratoriya sanoat dasturlariga e\'tibor qaratgan yangi sun\'iy intellekt loyihalari bo\'yicha hamkorlik boshladi.',
                },
                {
                    title: 'Mashinali o\'rganish bo\'yicha tadqiqot to\'plami nashr etildi',
                    description: 'Bizning jamoamiz kompyuter ko\'rishi bo\'yicha ilg\'or ishimizni bayon etuvchi asosiy xalqaro jurnalda yangi to\'plamni nashr etdi.',
                },
                {
                    title: 'Talabalar uchun sun\'iy intellekt seminar seriyasi boshlandi',
                    description: 'Yangi oylik seminar seriyasida amaliy sun\'iy intellekt va mashinali o\'rganish tushunchalari muhokama qilinadi.',
                },
            ],
            subscribe: {
                title: 'Yangilikdan xabardor bo\'ling',
                description: 'Bizning so\'nggi tadqiqotlarimiz, tadbirlarimiz va erishgan yutuqlarimizdan xabardor bo\'lish uchun obuna bo\'ling.',
                placeholder: 'Elektron pochtangizni kiriting',
                button: 'Obuna bo\'lish',
            },
            cta: {
                title: 'Tadqiqotlarimizga qo\'shiling',
                subtitle: 'Sun\'iy intellekt innovatsiyalarida ilg\'or bo\'ling va bizning hamkorlik tarmog\'imizning bir qismiga aylaning',
            },
        },
        achievements: {
            title: 'Yutuqlar va mukofotlar',
            subtitle: 'Bizning laboratoriya tomonidan erishilgan yutuqlarni va olgan mukofotlarni bayram qiling',
            items: [
                {
                    title: 'Sun\'iy intellekt bo\'yicha eng yaxshi tadqiqot mukofoti',
                    description: 'Chuqur o\'rganish va neyron tarmoqlardagi ilg\'or ishimiz uchun milliy sun\'iy intellekt konferensiyasida eng yaxshi tadqiqot mukofotini oldik.',
                },
                {
                    title: 'Xalqaro innovatsion mukofoti',
                    description: 'Bizning jamoamiz qishloq xo\'jaligida sun\'iy intellekt dasturlarini ishlab chiqish bo\'yicha xalqaro innovatsion mukofotini qo\'lga kiritdi.',
                },
                {
                    title: 'Ilg\'or tadqiqot grantini qo\'lga kiritdi',
                    description: 'Bizning ilg\'or mashinali o\'rganish tadqiqotimiz milliy tadqiqot jamg\'armasi tomonidan ilg\'or tadqiqot grantini oldi.',
                },
                {
                    title: 'Yilning eng yaxshi talabalari mukofoti',
                    description: 'Bizning doktorlik talabalari ilg\'or sun\'iy intellekt tadqiqotlari uchun yilning eng yaxshi talabalari mukofotiga sazovor bo\'ldi.',
                },
                {
                    title: 'Mukammallik markazi sertifikati',
                    description: 'Bizning laboratoriya milliy akkreditatsiya kengashi tomonidan sun\'iy intellekt tadqiqotlari bo\'yicha mukammallik markazi sifatida tan olindi.',
                },
                {
                    title: 'Laboratoriya tashkil etildi',
                    description: 'Sun\'iy intellekt laboratoriyasi Samarqand davlat universitetida sun\'iy intellekt tadqiqotlari va ta\'limida mukammallik markazini yaratish missiyasi bilan rasman tashkil etildi.',
                },
            ],
            cta: {
                title: 'Bizning muvaffaqiyatimizning bir qismi bo\'ling',
                subtitle: 'Sun\'iy intellekt sohasida muhim hissa qo\'shayotgan jamoamizga qo\'shiling',
                button: 'Ishtirok eting',
            },
        },
        projectDetail: {
            notFound: 'Loyiha topilmadi',
            backToProjects: 'Loyihalarga qaytish',
            overview: 'Umumiy ma\'lumot',
            objectives: 'Maqsadlar',
            team: 'Jamoa',
            projectInfo: 'Loyiha ma\'lumotlari',
            category: 'Toifa',
            status: 'Holat',
            startDate: 'Boshlangan sana',
            viewMore: 'Ko\'proq ko\'rish',
            detailedDescription: 'Bu loyiha sun\'iy intellekt sohasida chegaralarni siljitish uchun mo\'ljallangan ilg\'or tadqiqot tashabbusidir. Bizning jamoa ilg\'or usullar va texnologiyalardan foydalanib, amaliy natijalarga erishishga e\'tibor qaratadi.',
            objective1: 'Loyiha sohasida yangi usullar va texnologiyalarni ishlab chiqish va tatbiq etish',
            objective2: 'O\'zaro ko\'rib chiqiladigan jurnallarda yuqori sifatli tadqiqot nashrlarini nashr etish',
            objective3: 'Haqiqiy dunyo dasturlariga hissa qo\'shadigan amaliy yechimlar yaratish',
            teamDescription: 'Bu loyiha ustida sun\'iy intellekt turli sohalarida tajribaga ega bo\'lgan mutaxassislarning ko\'p fanli jamoasi ishlayapti. Bizning jamoa etakchi tadqiqotchilar, muhandislar va doktorlik talabalaridan iborat.',
        },
        footer: {
            description: 'Samarqand davlat universiteti sun\'iy intellekt laboratoriyasi',
            quickLinks: 'Tezkor havolalar',
            contact: 'Aloqa',
            follow: 'Bizni kuzatib boring',
            address: 'Samarqand davlat universiteti, Samarqand, O\'zbekiston',
            copyright: '© 2025 Sun\'iy intellekt laboratoriyasi. Barcha huquqlar himoyalangan.',
        },
    },
    en: {
        nav: {
            home: 'Home',
            about: 'About',
            projects: 'AI Projects',
            members: 'Members',
            news: 'News',
            achievements: 'Achievements',
        },
        home: {
            title: 'Artificial Intelligence',
            subtitle: 'Laboratory',
            description: 'Pioneering AI research and innovation at Samarkand State University',
            exploreProjects: 'Explore AI Projects',
            learnMore: 'Learn More',
            stats: {
                projects: 'Research AI Projects',
                members: 'Team Members',
                publications: 'Publications',
                partnerships: 'Partnerships',
            },
            whatWeDo: {
                title: 'What We Do',
                subtitle: 'Leading the way in artificial intelligence research and education',
                research: {
                    title: 'Advanced Research',
                    description: 'Cutting-edge AI research in machine learning, deep learning, and neural networks.',
                },
                innovation: {
                    title: 'Innovation Hub',
                    description: 'Fostering innovative solutions to real-world problems through AI technology.',
                },
                collaboration: {
                    title: 'Collaboration',
                    description: 'Building partnerships with industry leaders and academic institutions worldwide.',
                },
                growth: {
                    title: 'Future Growth',
                    description: 'Developing the next generation of AI researchers and practitioners.',
                },
            },
            cta: {
                title: 'Join Our Research Community',
                description: 'Be part of groundbreaking AI research and shape the future of technology',
                button: 'Get Involved',
            },
        },
        about: {
            title: 'About Our Laboratory',
            subtitle: 'The Artificial Intelligence Laboratory at Samarkand State University is dedicated to advancing the frontiers of AI research and education.',
            mission: {
                title: 'Our Mission',
                description: 'To advance artificial intelligence research and education, contributing to scientific knowledge and practical applications that benefit society.',
            },
            vision: {
                title: 'Our Vision',
                description: 'To be a leading center of excellence in AI research in Central Asia, fostering innovation and developing world-class AI professionals.',
            },
            excellence: {
                title: 'Excellence',
                description: 'We maintain the highest standards in research, education, and professional development, striving for excellence in everything we do.',
            },
            education: {
                title: 'Education',
                description: 'We are committed to training the next generation of AI researchers and practitioners through comprehensive educational programs.',
            },
            researchAreas: {
                title: 'Research Areas',
                subtitle: 'Our laboratory conducts cutting-edge research across multiple domains of artificial intelligence',
                areas: [
                    'Machine Learning & Deep Learning',
                    'Natural Language Processing',
                    'Computer Vision',
                    'Robotics & Automation',
                    'Neural Networks',
                    'Data Science & Analytics',
                    'AI Ethics & Safety',
                    'Reinforcement Learning',
                ],
            },
            story: {
                title: 'Our Story',
                text: 'Established as part of Samarkand State University\'s commitment to technological advancement, our AI Laboratory has grown into a hub of innovation and excellence in artificial intelligence research. Our team of dedicated researchers and students work on groundbreaking AI projects that push the boundaries of what\'s possible with AI. We collaborate with leading institutions worldwide and contribute to the global AI research community. Through our research, educational programs, and industry partnerships, we aim to make significant contributions to the field of artificial intelligence while fostering the next generation of AI leaders in Uzbekistan and beyond.',
            },
            cta: {
                title: 'Explore Our Projects',
                subtitle: 'Discover our cutting-edge research initiatives in artificial intelligence and join us in shaping the future of technology',
            },
        },
        projects: {
            title: 'Our AI Projects',
            subtitle: 'Explore our cutting-edge research AI Projects that push the boundaries of artificial intelligence',
            filter: 'Filter',
            allProjects: 'All AI Projects',
            categories: {
                1: 'Machine Learning',
                2: 'Computer Vision',
                3: 'NLP',
                4: 'Robotics',
            },
            status: {
                ongoing: 'Ongoing',
                completed: 'Completed',
            },
            projectList: [
                {
                    title: 'Uzbek Language Processing',
                    description: 'Advanced natural language processing system for the Uzbek language, including sentiment analysis and text generation.',
                },
                {
                    title: 'Smart Agriculture System',
                    description: 'AI-powered system for crop monitoring and yield prediction using computer vision and machine learning.',
                },
                {
                    title: 'Medical Image Analysis',
                    description: 'Deep learning models for automated diagnosis and disease detection from medical imaging data.',
                },
                {
                    title: 'Autonomous Navigation Robot',
                    description: 'Development of intelligent navigation systems for autonomous robots in complex environments.',
                },
                {
                    title: 'Traffic Flow Optimization',
                    description: 'AI system for analyzing and optimizing urban traffic patterns using real-time data processing.',
                },
                {
                    title: 'Face Recognition System',
                    description: 'Advanced facial recognition technology with high accuracy for security and identification applications.',
                },
            ],
            learnMore: 'Learn More',
            noProjects: 'No projects found in this category.',
            cta: {
                title: 'Have a Project Idea?',
                subtitle: 'We\'re always looking for new challenges and collaboration opportunities',
                button: 'Contact Us',
            },
        },
        members: {
            title: 'Members',
            subtitle: 'Meet the brilliant minds driving innovation at our AI Laboratory',
            leadership: {
                title: 'Leadership & Research Team',
                subtitle: 'Our team of dedicated researchers and engineers',
            },
            roles: {
                director: 'Laboratory Director',
                seniorResearcher: 'Senior Researcher',
                leadEngineer: 'Lead AI Engineer',
                researchScientist: 'Research Scientist',
                roboticsEngineer: 'Robotics Engineer',
                dataScientist: 'Data Scientist',
            },
            bios: [
                'Ph.D. in Computer Science, specializing in Deep Learning and Neural Networks',
                'Expert in Natural Language Processing and Computational Linguistics',
                'Specialist in Computer Vision and Image Processing',
                'Focus on Machine Learning Applications in Healthcare',
                'Developing intelligent autonomous systems and robotics',
                'Expert in Data Analytics and Predictive Modeling',
            ],
            students: {
                title: 'Our Students',
                subtitle: 'Training the next generation of AI experts',
                stats: {
                    masters: 'Master\'s Students: 25+',
                    doctoral: 'Doctoral Candidates: 8',
                    undergraduate: 'Undergraduate Researchers: 30+',
                    international: 'International Students: 5',
                },
            },
            join: {
                title: 'Join Our Team',
                description: 'We\'re always looking for talented researchers, engineers, and students who are passionate about artificial intelligence. If you\'re interested in joining our laboratory, we\'d love to hear from you.',
                applyNow: 'Apply Now',
                learnMore: 'Learn More',
            },
            collaboration: {
                title: 'Collaboration Opportunities',
                description: 'We welcome collaborations with industry partners, academic institutions, and research organizations worldwide.',
                button: 'Partner With Us',
            },
        },
        news: {
            title: 'News',
            subtitle: 'Stay updated with the latest news, events, and achievements from our AI Laboratory',
            readMore: 'Read More',
            items: [
                {
                    title: 'New Deep Learning Architecture Introduced',
                    description: 'Our research team has developed and published a novel neural network architecture for natural language processing.',
                },
                {
                    title: 'Successful AI Workshop Hosted',
                    description: 'Our laboratory hosted a major event for the international AI workshop, attracting over 200 participants from around the world.',
                },
                {
                    title: 'Government Grant Secured for Advanced Technologies',
                    description: 'We are pleased to announce that we have received a government grant for our research project on medical AI applications.',
                },
                {
                    title: 'New Partnership with Leading Tech Company',
                    description: 'Our laboratory has initiated a collaboration on new AI projects with a focus on industry applications.',
                },
                {
                    title: 'Research Paper Published on Machine Learning',
                    description: 'Our team published a new paper in a leading international journal detailing our groundbreaking work in computer vision.',
                },
                {
                    title: 'AI Workshop Series Launched for Students',
                    description: 'A new monthly workshop series covering practical AI and machine learning concepts has been initiated.',
                },
            ],
            subscribe: {
                title: 'Stay Updated',
                description: 'Subscribe to receive updates about our latest research, events, and achievements.',
                placeholder: 'Enter your email',
                button: 'Subscribe',
            },
            cta: {
                title: 'Join Our Research',
                subtitle: 'Be at the forefront of AI innovation and become part of our collaborative network',
            },
        },
        achievements: {
            title: 'Achievements & Awards',
            subtitle: 'Celebrating the milestones and recognitions earned by our laboratory',
            items: [
                {
                    title: 'Best Research Award in AI',
                    description: 'Received the best research award at the national AI conference for our groundbreaking work in deep learning and neural networks.',
                },
                {
                    title: 'International Innovation Award',
                    description: 'Our team secured the international innovation award for developing AI applications in agriculture.',
                },
                {
                    title: 'Advanced Research Grant Secured',
                    description: 'Our advanced machine learning research received an advanced research grant from the national research foundation.',
                },
                {
                    title: 'Best Student Award of the Year',
                    description: 'Our doctoral students were honored with the best student award of the year for advanced AI research.',
                },
                {
                    title: 'Center of Excellence Certification',
                    description: 'Our laboratory was recognized as a center of excellence in AI research by the national accreditation council.',
                },
                {
                    title: 'Laboratory Founded',
                    description: 'The AI Laboratory was officially established at Samarkand State University with a mission to create a center of excellence in AI research and education.',
                },
            ],
            cta: {
                title: 'Be Part of Our Success',
                subtitle: 'Join our team that is making significant contributions to the field of artificial intelligence',
                button: 'Get Involved',
            },
        },
        projectDetail: {
            notFound: 'Project not found',
            backToProjects: 'Back to Projects',
            overview: 'Overview',
            objectives: 'Objectives',
            team: 'Team',
            projectInfo: 'Project Information',
            category: 'Category',
            status: 'Status',
            startDate: 'Start Date',
            viewMore: 'View More',
            detailedDescription: 'This project is a cutting-edge research initiative designed to push the boundaries in the field of artificial intelligence. Our team focuses on developing practical solutions using advanced methodologies and technologies.',
            objective1: 'Develop and apply novel methodologies and technologies in the project area',
            objective2: 'Publish high-quality research papers in peer-reviewed journals',
            objective3: 'Create practical solutions that contribute to real-world applications',
            teamDescription: 'This project is being worked on by a multidisciplinary team of experts with experience in various fields of artificial intelligence. Our team consists of leading researchers, engineers, and doctoral students.',
        },
        footer: {
            description: 'Artificial Intelligence Laboratory at Samarkand State University',
            quickLinks: 'Quick Links',
            contact: 'Contact',
            follow: 'Follow Us',
            address: 'Samarkand State University, Samarkand, Uzbekistan',
            copyright: '© 2025 AI Laboratory. All rights reserved.',
        },
    },
};

let currentLang = localStorage.getItem("lang") || "uz";

function getTranslation(lang, keyPath) {
    return keyPath.split(".").reduce((obj, key) => obj?.[key], translations[lang]);
}

function applyLang(lang) {
    document.querySelectorAll("[data-key]").forEach((el) => {
        const key = el.getAttribute("data-key");
        el.textContent = getTranslation(lang, key);
    });
}

function changeLang(lang) {
    currentLang = lang;
    localStorage.setItem("lang", lang);
    applyLang(lang);
}

document.addEventListener("DOMContentLoaded", () =>{
    const langSelect = document.getElementById("langSelect");
    langSelect.value = currentLang;
    applyLang(currentLang)
});
