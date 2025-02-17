
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  padding-left: 5px;
  padding-right: 5px;
  font-size:12px;
}
.blue {color: blue;}
.red {color: red;}
</style>
<?php
error_reporting(0);
$player=array(
"0000138" => "Hwang Yeon-ju",
"1000445" => "Kim Minchae",
"1000452" => "Choi Yeonjin",
"1000482" => "Kris",
"1000448" => "Song Eunchae",
"1000453" => "Nam Eunseo",
"1000487" => "Thuy",
"1000488" => "Matejko",
"1000458" => "Jeon Dabin",
"1000333" => "Thanacha",
"1000480" => "Taylor",
"1000466" => "Yoon Hajoon",
"1000375" => "Maxim",
"1000441" => "Lee Joo Ah",
"1000442" => "Park Chaemin",
"0000741" => "Yang Hyo-jin",
"0001267" => "Kim Yeon-gyeon",
"0001504" => "Go Ye-rim",
"0001849" => "Go Minji",
"0001981" => "Dain Kim",
"0001982" => "Youngju Lee",
"0002106" => "Jiyoon Jeong",
"0002118" => "Na Hyun-su",
"0002214" => "Lee Da-hyeon",
"1000056" => "Han Mi-Reu",
"1000214" => "KimSaRang",
"1000316" => "Choi Seo-hyun",
"1000317" => "Seo Ji-hye",
"1000334" => "WeePaWee",
"0000405" => "Myeong-ok Lim",
"0000759" => "Yuna Bae",
"0001271" => "Moon Jeong-won",
"0001572" => "Jeon Sae-yan",
"0001704" => "Kang So-hwi",
"0001843" => "Ha Hyo-rim",
"0001864" => "Kim Hyun-jung",
"1000133" => " Kim Se-in",
"1000160" => "Lee Yoon-jung",
"1000210" => "Lee Ye-eun",
"1000312" => "Kim Se-bin",
"1000314" => "Kim Mi-jin",
"1000434" => "Nikolova",
"1000435" => "Uni",
"0000829" => "Yeom Hye-seon",
"0001200" => "Pyo Seung-ju",
"0001407" => "NohRan",
"0001568" => "Kim Chae-na",
"0002117" => "Park Eun-jin",
"0002121" => "Park Hye-min",
"0002221" => "Ahn Ye-rim",
"0002228" => "Jeong Ho-young",
"1000048" => "Lee Seon-woo",
"1000122" => "Lee Ye-dam",
"1000124" => "Lee Ji-su",
"1000218" => "Choi Hyo-seo",
"1000306" => "Kwak Seon-ok",
"1000308" => "Jeong Su-ji",
"1000313" => "Shin Eun-ji",
"1000332" => "Bukiric",
"1000344" => "Mega",
"0000463" => "Kim Yeon-kyung",
"0000476" => "Kim Su-ji",
"0001215" => "Choi Eun-ji",
"0001272" => "Kim Mi-yeon",
"0001406" => "Shin Yeon-kyung",
"0001506" => "Lee Go-eun",
"0001565" => "Kim Da-sol",
"0001687" => "Byeon Ji-su",
"0001854" => "Do Soo-bin",
"0002224" => "Daeun Kim",
"1000054" => "Hyejin Park",
"1000116" => "Jeong Yun-ju",
"1000117" => "Park Su-yeon",
"1000203" => "Lim Hye-rim",
"1000309" => "Seo Chae-hyeon",
"1000432" => "Tutku",
"1000433" => "Ruirei",
"1000438" => "Fitzi",
"0001853" => "Yoo Seo-yeon",
"0001863" => "Ahn Hye-jin",
"0001964" => "Han Su-jin",
"0001974" => "Woo Soo-min",
"0001980" => "Kim Joo-hyang",
"0002112" => "Moon Ji-yoon",
"0002216" => "Choi Ga-eun",
"0002229" => "Kwon Minji",
"1000051" => "Kim Jiwon",
"1000052" => "Oh Seyeon",
"1000132" => "Seo Chae-won",
"1000205" => "Kim Ji-woo",
"1000304" => "Lee Yoon-shin",
"1000305" => "Yugaram",
"1000345" => "Silva",
"1000436" => "Wailer",
"0000841" => "Hwang Min-kyung",
"0001208" => "Kim Hee-jin",
"0001385" => "Lee So-young",
"0001570" => "Kim Ha-kyung",
"0001703" => "Kim Chae-won",
"0001966" => "Kim Chae-yeon",
"0002119" => "Go Eui-jeong",
"0002130" => "Lee Joo-ah",
"0002217" => "Yuk Seo-young",
"1000044" => "Choi Jeong-min",
"1000045" => "Kim Su-bin",
"1000120" => "Koo Hye-in",
"1000199" => "Kim Yoon-woo",
"1000296" => "Jeon Soo-min",
"1000297" => "Kim Se-yul",
"1000298" => "Joo Yeon-hee",
"1000425" => "Victoria",
"1000426" => "Xintong Chen",
"0001210" => "Chae Seon-ah",
"0001212" => "Park Jeong-ah",
"0001494" => "Han Da-hye",
"0001566" => "Ha Hye-jin",
"0001694" => "Park Kyung-hyun",
"0001695" => "Lee Ye-rim",
"0001700" => "Lee Han-bi",
"0001979" => "Lee Won-jeong",
"1000130" => "Park Sa-rang",
"1000131" => "Park Eun-seo",
"1000135" => "Park Yeon-hwa",
"1000196" => "Lim Ju-eun",
"1000197" => "Orkhon",
"1000299" => "Ryu Hye-seon",
"1000300" => "Park Su-Bin",
"1000301" => "Lee Ju-Hyun",
"1000429" => "Dapic",
"1000430" => "Yu Zhang",
"1000170" => "Moma",
"0000770" => "Han Seon-su",
"0000786" => "Yu Kwang-woo",
"0001179" => "Jeong Seong-min",
"0001180" => "Kwak Seung-seok",
"0001366" => "Lee Soo-hwang",
"0001477" => "Kim Gyu-min",
"0001485" => "Jeong Ji-seok",
"0001487" => "Jo Jae-yong",
"0001994" => "Kim Hyeong-jin",
"0002075" => "Yosvani",
"0002262" => "Jin Ji-wi",
"1000162" => "Jeong Han-yong",
"1000163" => "Lee Jun",
"1000164" => "Kim Min-jae",
"1000224" => "Song Min-geun",
"1000225" => "Kang Seun-gil",
"1000355" => "Kim Jun-ho",
"1000409" => "Aref",
"0001307" => "Jo Guk-gi",
"0001468" => "Song Hyeon-jong",
"0001580" => "Noh Jae-wook",
"0001713" => "Kim Jae-hwi",
"0001745" => "Lee Simon",
"0001747" => "Song Tae-hoon",
"0001970" => "Lee Ho-geon",
"0001995" => "Kim Jeong-ho",
"0002135" => "Kim Jeong-yoon",
"1000067" => "kim Woo-jin",
"1000234" => "Kim Joon-woo",
"1000236" => "Anh Ji-won",
"1000347" => "Lee Yoon-soo",
"1000348" => "Yang Soo-hyeon",
"1000349" => "Lee Jae-hyeon",
"1000350" => "Park Yoo-hyeon",
"1000351" => "Lee Hyeon-jin",
"1000422" => "Grozdanov",
"1000428" => "Fajri",
"0000285" => "Choi Sam-hwan",
"0001196" => "Kim Bo-gyun",
"0000874" => "Park Sang-ha",
"0001490" => "Jeong Min-soo",
"0001551" => "Woo Sang-jo",
"0001739" => "Jeong Dong-geun",
"0001866" => "Cha Young-seok",
"0002085" => "Hwang Gyeong-min",
"0002092" => "Han Guk-min",
"0002208" => "Vienna",
"1000168" => "Son Joon-young",
"1000226" => "Lee Hyeon-seung",
"1000230" => "Park Hyeon-bin",
"1000231" => "Bae Sang-jin",
"1000232" => "Choi Yo-han",
"1000356" => "Yoon Seo-jin",
"1000358" => "Jang Ha-rang",
"1000359" => "Seong Han-hee",
"1000419" => "Staples",
"0000853" => "Moon Seong-min",
"0001291" => "Choi Min-ho",
"0001361" => "Leo",
"0001462" => "Jeon Kwang-in",
"0001577" => "Hwang Seung-bin",
"0001865" => "Lee Si-woo",
"0001873" => "Heo Soo-bong",
"0002136" => "Lee Seung-jun",
"0002213" => "Oh Eun-ryeol",
"1000059" => "Kim Seon-ho",
"1000060" => "Pak Kyeong-min",
"1000139" => "Jeong Tae-joon",
"1000227" => "Lee Joon-hyeop",
"1000364" => "Kim Jin-young",
"1000365" => "Lim Seong-ha",
"1000416" => "Shin Feng",
"0000872" => "Shin Young-seok",
"0001289" => "Seo Jae-deok",
"0001378" => "Jo Geun-ho",
"0002097" => "Lee Jiseok",
"0002104" => "Lee Won-joong",
"0002111" => "Jeon Jin-seon",
"0002243" => "Jeong Seong-hwan",
"0002250" => "Kim Dong-young",
"1000072" => "Lim Seong-jin",
"1000146" => "Kang Woo-seok",
"1000171" => "Park Seung-soo",
"1000245" => "Kim Joo-young",
"1000246" => "Gu Gyo-hyeok",
"1000353" => "Shin Seong-ho",
"1000354" => "Kim Geon-hee",
"1000420" => "ALIEN",
"1000421" => "Yamato",
"0000769" => "Jin Sang-heon",
"0001290" => "Bu Yong-chan",
"0001475" => "Lee Min-gyu",
"0001476" => "Song Hee-chae",
"0001483" => "Jeong Seong-hyeon",
"0001548" => "Jin Seong-tae",
"0001555" => "Park Won-bin",
"0001993" => "Cha Ji-hwan",
"0002242" => "Kim Woong-bi",
"0002251" => "Shin Jang-ho",
"1000086" => "Park Chang-seong",
"1000165" => "Jeong Jin-hyeok",
"1000172" => "Kang Jeong-min",
"1000235" => "Park Seong-jin",
"1000237" => "Shin Ho-jin",
"1000361" => "Park Tae-seong",
"1000362" => "Kim Geon-woo",
"1000363" => "Lee Jae-seo",
"1000417" => "Lucconi",
"1000418" => "Jang Bing-rong",
"0001363" => "Lee Kang-won",
"0001369" => "Park Jin-woo",
"0001474" => "Song Myeong-geun",
"0001550" => "Oh Jae-seong",
"0001578" => "Lee Seung-won",
"0001956" => "Park Joon-hyeok",
"0001958" => "Kim Ji-han",
"0001968" => "Han Seong-jeong",
"0002238" => "Kim Dong-min",
"1000065" => "Kim Kwang-il",
"1000150" => "Lee Sang-hyeon",
"1000151" => "Kim Young-joon",
"1000152" => "Kim Wan-jong",
"1000241" => "Han Tae-Joon",
"1000366" => "Kim Hyeong-geun",
"1000423" => "Ahyi",
"1000424" => "Ali",
"1000461" => "Ki Yo-han",
"0001724" => "Na Gyeong-bok",
"1000447" => "Kim Da-eun");

$data="
1,1001,1008,2024-10-19,021,201
2,2001,2004,2024-10-19,021,201
3,1009,1005,2024-10-20,021,201
4,2003,2005,2024-10-20,021,201
5,1002,1004,2024-10-22,021,201
6,2002,2007,2024-10-22,021,201
7,1006,1001,2024-10-23,021,201
8,2006,2001,2024-10-23,021,201
9,1008,1005,2024-10-24,021,201
10,2004,2005,2024-10-24,021,201
11,1004,1009,2024-10-25,021,201
12,2007,2003,2024-10-25,021,201
13,1006,1002,2024-10-26,021,201
14,2002,2006,2024-10-26,021,201
15,1005,1001,2024-10-27,021,201
16,2005,2001,2024-10-27,021,201
17,1008,1004,2024-10-29,021,201
18,2004,2007,2024-10-29,021,201
19,1009,1006,2024-10-30,021,201
20,2003,2006,2024-10-30,021,201
21,1001,1002,2024-10-31,021,201
22,2001,2002,2024-10-31,021,201
23,1004,1005,2024-11-01,021,201
24,2007,2005,2024-11-01,021,201
25,1006,1008,2024-11-02,021,201
26,2006,2004,2024-11-02,021,201
27,1002,1009,2024-11-03,021,201
28,2002,2003,2024-11-03,021,201
29,1001,1004,2024-11-05,021,201
30,2001,2007,2024-11-05,021,201
31,1005,1006,2024-11-06,021,201
32,2005,2006,2024-11-06,021,201
33,1002,1008,2024-11-07,021,201
34,2002,2004,2024-11-07,021,201
35,1009,1001,2024-11-08,021,201
36,2003,2001,2024-11-08,021,201
37,1004,1006,2024-11-09,021,201
38,2007,2006,2024-11-09,021,201
39,1005,1002,2024-11-10,021,201
40,2005,2002,2024-11-10,021,201
41,1008,1009,2024-11-12,021,201
42,2004,2003,2024-11-12,021,201
43,1004,1001,2024-11-13,021,201
44,2007,2001,2024-11-13,021,201
45,1006,1005,2024-11-14,021,201
46,2006,2005,2024-11-14,021,201
47,1008,1002,2024-11-15,021,201
48,2004,2002,2024-11-15,021,201
49,1001,1009,2024-11-16,021,201
50,2001,2003,2024-11-16,021,201
51,1006,1004,2024-11-17,021,201
52,2006,2007,2024-11-17,021,201
53,1002,1005,2024-11-19,021,201
54,2002,2005,2024-11-19,021,201
55,1009,1008,2024-11-20,021,201
56,2003,2004,2024-11-20,021,201
57,1001,1006,2024-11-21,021,201
58,2001,2006,2024-11-21,021,201
59,1004,1002,2024-11-22,021,201
60,2007,2002,2024-11-22,021,201
61,1005,1009,2024-11-23,021,201
62,2005,2003,2024-11-23,021,201
63,1008,1001,2024-11-24,021,201
64,2004,2001,2024-11-24,021,201
65,1006,1002,2024-11-26,021,201
66,2002,2006,2024-11-26,021,201
67,1009,1004,2024-11-27,021,201
68,2003,2007,2024-11-27,021,201
69,1005,1008,2024-11-28,021,201
70,2005,2004,2024-11-28,021,201
71,1002,1001,2024-11-29,021,201
72,2002,2001,2024-11-29,021,201
73,1006,1009,2024-11-30,021,201
74,2006,2003,2024-11-30,021,201
75,1004,1008,2024-12-01,021,201
76,2007,2004,2024-12-01,021,201
77,1001,1005,2024-12-03,021,201
78,2001,2005,2024-12-03,021,201
79,1009,1002,2024-12-04,021,201
80,2003,2002,2024-12-04,021,201
81,1008,1006,2024-12-05,021,201
82,2004,2006,2024-12-05,021,201
83,1005,1004,2024-12-06,021,201
84,2007,2005,2024-12-06,021,201
85,1002,1009,2024-12-07,021,201
86,2002,2003,2024-12-07,021,201
87,1006,1001,2024-12-08,021,201
88,2006,2001,2024-12-08,021,201
89,1008,1004,2024-12-10,021,201
90,2004,2007,2024-12-10,021,201
91,1005,1002,2024-12-11,021,201
92,2005,2002,2024-12-11,021,201
93,1009,1001,2024-12-12,021,201
94,2003,2001,2024-12-12,021,201
95,1006,1008,2024-12-13,021,201
96,2006,2004,2024-12-13,021,201
97,1004,1005,2024-12-14,021,201
98,2007,2005,2024-12-14,021,201
99,1001,1002,2024-12-15,021,201
100,2001,2002,2024-12-15,021,201
101,1008,1009,2024-12-17,021,201
102,2004,2003,2024-12-17,021,201
103,1005,1006,2024-12-18,021,201
104,2005,2006,2024-12-18,021,201
105,1002,1004,2024-12-19,021,201
106,2002,2007,2024-12-19,021,201
107,1001,1008,2024-12-20,021,201
108,2001,2004,2024-12-20,021,201
109,1009,1005,2024-12-21,021,201
110,2003,2005,2024-12-21,021,201
111,1004,1006,2024-12-22,021,201
112,2007,2006,2024-12-22,021,201
113,1002,1008,2024-12-24,021,201
114,2002,2004,2024-12-24,021,201
115,1005,1001,2024-12-25,021,201
116,2005,2001,2024-12-25,021,201
117,1004,1009,2024-12-26,021,201
118,2007,2003,2024-12-26,021,201
119,1002,1006,2024-12-27,021,201
120,2006,2002,2024-12-27,021,201
121,1008,1005,2024-12-28,021,201
122,2004,2005,2024-12-28,021,201
123,1001,1004,2024-12-29,021,201
124,2007,2001,2024-12-29,021,201
125,1009,1006,2024-12-31,021,201
126,2003,2006,2024-12-31,021,201
127,1005,1008,2025-01-07,021,201
128,2005,2004,2025-01-07,021,201
129,1002,1001,2025-01-08,021,201
130,2002,2001,2025-01-08,021,201
131,1006,1004,2025-01-09,021,201
132,2006,2007,2025-01-09,021,201
133,1005,1009,2025-01-10,021,201
134,2005,2003,2025-01-10,021,201
135,1008,1002,2025-01-11,021,201
136,2004,2002,2025-01-11,021,201
137,1004,1001,2025-01-12,021,201
138,2001,2007,2025-01-12,021,201
139,1006,1009,2025-01-14,021,201
140,2006,2003,2025-01-14,021,201
141,1002,1005,2025-01-15,021,201
142,2002,2005,2025-01-15,021,201
143,1004,1008,2025-01-16,021,201
144,2007,2004,2025-01-16,021,201
145,1001,1006,2025-01-17,021,201
146,2001,2006,2025-01-17,021,201
147,1009,1002,2025-01-18,021,201
148,2003,2002,2025-01-18,021,201
149,1005,1004,2025-01-19,021,201
150,2005,2007,2025-01-19,021,201
151,1008,1006,2025-01-21,021,201
152,2004,2006,2025-01-21,021,201
153,1001,1009,2025-01-22,021,201
154,2001,2003,2025-01-22,021,201
155,1004,1002,2025-01-23,021,201
156,2007,2002,2025-01-23,021,201
157,1006,1005,2025-01-24,021,201
158,2006,2005,2025-01-24,021,201
159,1008,1001,2025-01-25,021,201
160,2004,2001,2025-01-25,021,201
161,1009,1004,2025-01-26,021,201
162,2003,2007,2025-01-26,021,201
163,1002,1006,2025-01-28,021,201
164,2002,2006,2025-01-28,021,201
165,1001,1005,2025-01-29,021,201
166,2001,2005,2025-01-29,021,201
167,1009,1008,2025-01-30,021,201
168,2003,2004,2025-01-30,021,201
169,1004,1006,2025-01-31,021,201
170,2007,2006,2025-01-31,021,201
171,1005,1002,2025-02-01,021,201
172,2005,2002,2025-02-01,021,201
173,1008,1009,2025-02-02,021,201
174,2004,2003,2025-02-02,021,201
175,1006,1001,2025-02-04,021,201
176,2006,2001,2025-02-04,021,201
177,1004,1005,2025-02-05,021,201
178,2005,2007,2025-02-05,021,201
179,1002,1008,2025-02-06,021,201
180,2002,2004,2025-02-06,021,201
181,1009,1001,2025-02-07,021,201
182,2003,2001,2025-02-07,021,201
183,1005,1006,2025-02-08,021,201
184,2005,2006,2025-02-08,021,201
185,1008,1004,2025-02-09,021,201
186,2004,2007,2025-02-09,021,201
187,1001,1002,2025-02-11,021,201
188,2001,2002,2025-02-11,021,201
189,1009,1006,2025-02-12,021,201
190,2003,2006,2025-02-12,021,201
191,1008,1005,2025-02-13,021,201
192,2004,2005,2025-02-13,021,201
193,1001,1004,2025-02-14,021,201
194,2001,2007,2025-02-14,021,201
195,1002,1009,2025-02-15,021,201
196,2002,2003,2025-02-15,021,201
197,1006,1008,2025-02-16,021,201
198,2006,2004,2025-02-16,021,201
199,1005,1001,2025-02-18,021,201
200,2005,2001,2025-02-18,021,201
201,1004,1009,2025-02-19,021,201
202,2007,2003,2025-02-19,021,201
203,1006,1002,2025-02-20,021,201
204,2006,2002,2025-02-20,021,201
205,1001,1008,2025-02-21,021,201
206,2001,2004,2025-02-21,021,201
207,1009,1005,2025-02-22,021,201
208,2003,2005,2025-02-22,021,201
209,1002,1004,2025-02-23,021,201
210,2002,2007,2025-02-23,021,201
211,1008,1006,2025-02-25,021,201
212,2004,2006,2025-02-25,021,201
213,1005,1009,2025-02-26,021,201
214,2005,2003,2025-02-26,021,201
215,1002,1001,2025-02-27,021,201
216,2002,2001,2025-02-27,021,201
217,1006,1004,2025-02-28,021,201
218,2006,2007,2025-02-28,021,201
219,1009,1008,2025-03-01,021,201
220,2003,2004,2025-03-01,021,201
221,1001,1005,2025-03-02,021,201
222,2001,2005,2025-03-02,021,201
223,1004,1002,2025-03-03,021,201
224,2007,2002,2025-03-03,021,201
225,1006,1009,2025-03-05,021,201
226,2006,2003,2025-03-05,021,201
227,1008,1001,2025-03-06,021,201
228,2004,2001,2025-03-06,021,201
229,1005,1004,2025-03-07,021,201
230,2005,2007,2025-03-07,021,201
231,1002,1006,2025-03-08,021,201
232,2006,2002,2025-03-08,021,201
233,1001,1009,2025-03-09,021,201
234,2001,2003,2025-03-09,021,201
235,1004,1008,2025-03-11,021,201
236,2007,2004,2025-03-11,021,201
237,1002,1005,2025-03-12,021,201
238,2002,2005,2025-03-12,021,201
239,1001,1006,2025-03-13,021,201
240,2001,2006,2025-03-13,021,201
241,1009,1004,2025-03-14,021,201
242,2003,2007,2025-03-14,021,201
243,1008,1002,2025-03-15,021,201
244,2004,2002,2025-03-15,021,201
245,1006,1005,2025-03-16,021,201
246,2006,2005,2025-03-16,021,201
247,1004,1001,2025-03-18,021,201
248,2007,2001,2025-03-18,021,201
249,1009,1002,2025-03-19,021,201
250,2003,2002,2025-03-19,021,201
251,1005,1008,2025-03-20,021,201
252,2005,2004,2025-03-20,021,201
253,2093,2095,2025-03-23,021,204
254,1093,1095,2025-03-24,021,204
255,2092,2096,2025-03-25,021,202
256,1092,1096,2025-03-26,021,202
257,2096,2092,2025-03-27,021,202
258,1096,1092,2025-03-28,021,202
259,2092,2096,2025-03-29,021,202
260,1092,1096,2025-03-30,021,202
261,2091,2094,2025-03-31,021,203
262,1091,1094,2025-04-01,021,203
263,2091,2094,2025-04-02,021,203
264,1091,1094,2025-04-03,021,203
265,2094,2091,2025-04-04,021,203
266,1094,1091,2025-04-05,021,203
267,2094,2091,2025-04-06,021,203
268,1094,1091,2025-04-07,021,203
269,2091,2094,2025-04-08,021,203
270,1091,1094,2025-04-09,021,203";
$team = array(
"2001" => "Hyundai Hillstate",
"2002" => "Ex Hi-pass",
"2003" => "Red Sparks",
"2004" => "Pink Spiders",
"2005" => "GS Caltex",
"2006" => "IBK Altos",
"2007" => "AI Peppers",
"1001" => "Korean Air Jumbos",
"1002" => "Bluefangs",
"1004" => "KB Stars",
"1005" => "Sky Walkers",
"1006" => "Kepco Vixtorm",
"1008" => "OK Man",
"1009" => "Woori Won");

$num=$_GET['num'];
if(isset($num) && $num !==""){$num=$num;}
else{$num=1;}

$datax=explode("\n",$data);
$numx=explode(",",$datax[$num]);
$home=$numx[1];
$away=$numx[2];
$date=$numx[3];
$season=$numx[4];
$gpart=$numx[5];

$link="https://api.kovo.co.kr/api/game/playerRecord?season=$season&gPart=$gpart&gNum=$num&hTeamCode=$home&aTeamCode=$away";
//$json=json_decode(curlget($link),true);
//echo $link."<br>";
$json=json_decode(curlget($link),true);
$json3=json_decode(curlget("https://api.kovo.co.kr/api/game/summary?season=$season&gPart=$gpart&gNum=$num"),true);
//var_dump($json3);
$hSetPoint=$json3['result']['hSetPoint'];
$aSetPoint=$json3['result']['aSetPoint'];
$jumlahset=$hSetPoint+$aSetPoint;

echo "$date<br>$team[$home] $hSetPoint-$aSetPoint $team[$away]<br>";
for($s=1;$s<=$jumlahset;$s++){
  if($s<$jumlahset){echo "set $s: <b>".$json3['result']['hSet'.$s.'Point']."</b>-<b>".$json3['result']['aSet'.$s.'Point']."</b>, ";}
  else{echo "set $s: <b>".$json3['result']['hSet'.$s.'Point']."</b>-<b>".$json3['result']['aSet'.$s.'Point']."</b>";}
}
//echo "<p>";
$penonton=$json3['result']['spectators'];
echo "<br>$penonton penonton<p>";
//echo "<table><tr><td>


//  $link="https://api.kovo.co.kr/api/game/playerRecord?season=021&gPart=201&gNum=2&hTeamCode=2001&aTeamCode=2004";
//  $json=json_decode(file_get_contents($link),true);
  //var_dump($json);
$homerec=$json['result']['home']['playerRecord'];
//var_dump($json2);
$jumlah=count($homerec);
//echo "<table><tr><td  style='text-align:top'>";
echo $team[$home]." :<br>";
$hteamattack=0;
$hteamblock=0;
$hteamsoft=0;
$hteamace=0;
$hteamerror=0;
$hteamatt=0;
$hteamatf=0;
$hpoint=0;
  $hbas=0;
  $hate=0;
  $hbt=0;
  $hbf=0;
  $hblke=0;
  $hst=0;
  $hse=0;
  $hssp=0;
  $hdt=0;$hds=0;$hdf=0;$hde=0;
  $hrt=0;$hrs=0;$hrf=0;
  $hsett=0;$hsets=0;$hsete=0;
echo "<table><tr><th rowspan=2 width=100px>Player<th rowspan=2>No<th rowspan=2>Pos<th rowspan=2>Poin<th rowspan=2>Rate<th colspan=7>Attack
<th colspan=5>Blocking<th colspan=3>Serve<th colspan=4>Dig<th colspan=4>Recieve<th colspan=3>Set<th rowspan=2>Error<th rowspan=2>Point<br>Margin
<tr><th>t<th>s<th>f<th>e<th>gp(%)<th>ba<th>eff %
<th>t<th>s<th>b<th>f<th>e
<th>t<th>s<th>e
<th>t<th>s<th>f<th>e
<th>t<th>s<th>f<th>p(%)
<th>t<th>s<th>e";
for($i=0;$i<$jumlah;$i++){
  $pNum=$homerec[$i]['pNum'];
  $pName=$homerec[$i]['pName'];
  $pCode=$homerec[$i]['pCode'];
  $namaa=$player[$pCode];
  if($namaa ==""){$namanya=$pName;}else{$namanya=$namaa;}
  $position=$homerec[$i]['position'];
  $point=$homerec[$i]['point'];$hpoint=$hpoint+$point;
  $atsp=$homerec[$i]['atsp'];
  $attack=$homerec[$i]['ats'];$hteamattack=$hteamattack+$attack;
  $atf=$homerec[$i]['atf'];$hteamatf=$hteamatf+$atf;
  $att=$homerec[$i]['att'];$hteamatt=$hteamatt+$att;
  $ate=$homerec[$i]['ate'];$hate=$hate+$ate;
  $atgp=$homerec[$i]['atgp'];
  $bas=$homerec[$i]['bas'];$hbas=$hbas+$bas;
  $block=$homerec[$i]['bs'];$hteamblock=$hteamblock+$block;
  $bt=$homerec[$i]['bt'];$hbt=$hbt+$bt;
  $blkvb=$homerec[$i]['blkvb'];$hteamsoft=$hteamsoft+$blkvb;
  $bf=$homerec[$i]['bf'];$hbf=$hbf+$bf;
  $blke=$homerec[$i]['blke'];$hblke=$hblke+$blke;
  $ace=$homerec[$i]['ss'];$hteamace=$hteamace+$ace;
  $st=$homerec[$i]['st'];$hst=$hst+$st;
  $se=$homerec[$i]['se'];$hse=$hse+$se;
  $ssp=$homerec[$i]['ssp'];$hssp=$hssp+$ssp;
  $nama=$homerec[$i]['pCode'];
  $dt=$homerec[$i]['dt'];$hdt=$hdt+$dt;
  $ds=$homerec[$i]['ds'];$hds=$hds+$ds;
  $df=$homerec[$i]['df'];$hdf=$hdf+$df;
  $de=$homerec[$i]['de'];$hde=$hde+$de;
  $rt=$homerec[$i]['rt'];$hrt=$hrt+$rt;
  $rs=$homerec[$i]['rs'];$hrs=$hrs+$rs;
  $rf=$homerec[$i]['rf'];$hrf=$hrf+$rf;
  $rsp=$homerec[$i]['rsp'];
  $sett=$homerec[$i]['sett'];$hsett=$hsett+$sett;
  $sets=$homerec[$i]['sets'];$hsets=$hsets+$sets;
  $sete=$homerec[$i]['sete'];$hsete=$hsete+$sete;
  
  $error=$homerec[$i]['err'];$hteamerror=$hteamerror+$error;
  $tot=$point - $atf - $rf - $error;
  if($atsp > 0){$effp=number_format((($attack - $atf - $ate)/$att)*100,2);}else {$effp=0;}
  
  echo "<tr";
  if ($i % 2 == 0) {echo ' bgcolor=#fff9c4';}
  echo ">";

  if($sisa =0){$trx=$tgbgcolor;}  else{$trx=$trbgpolos;}
  echo "<td style='text-align:left'>$namanya<td>$pNum<td>$position<td><b class=blue>$point<td>$atsp%<td>$att<td><b><b class=blue>$attack<td>$atf<td><b class=red>$ate<td>$atgp<td>$bas<td>$effp<td>$bt<td><b class=blue>$block<td>$blkvb<td>$bf<td><b class=red>$blke<td>$st<td><b class=blue>$ace<td><b class=red>$se<td>$dt<td>$ds<td>$df<td><b class=red>$de<td>$rt<td>$rs<td><b class=red>$rf<td>$rsp<td>$sett<td>$sets<td><b class=red>$sete<td><b class=red>$error<td>$tot</tr>\n";
//  if ($i!==($jumlah-1)){echo "<br>";}
}
//echo "</table><td style='text-align:top'>";
echo "<tr bgcolor=#99f9c4><td style='text-align:left'>TOTAL<td><td><td><b class=blue>$hpoint<td><td>$hteamatt<td><b><b class=blue>$hteamattack<td>$hteamatf<td><b class=red>$hate<td><td>$hbas<td><td>$hbt<td><b class=blue>$hteamblock<td>$hteamsoft<td>$hbf<td><b class=red>$hblke<td>$hst<td><b class=blue>$hteamace<td><b class=red>$hse<td>$hdt<td>$hds<td>$hdf<td><b class=red>$hde<td>$hrt<td>$hrs<td><b class=red>$hrf<td><td>$hsett<td>$hsets<td><b class=red>$hsete<td><b class=red>$hteamerror<td></tr>\n";
echo "</table><p>\n\n";
$awayrec=$json['result']['away']['playerRecord'];
$jumlaha=count($awayrec);
echo $team[$away]." :<br>";
$ateamattack=0;
$ateamblock=0;
$ateamsoft=0;
$ateamace=0;
$ateamerror=0;
$ateamatt=0;
$ateamatf=0;
$apoint=0;
  $abas=0;
  $aate=0;
  $abt=0;
  $abf=0;
  $ablke=0;
  $ast=0;
  $ase=0;
  $assp=0;
  $adt=0;$ads=0;$adf=0;$ade=0;
  $art=0;$ars=0;$arf=0;
  $asett=0;$asets=0;$asete=0;
echo "<table><tr><th rowspan=2 width=100px>Player<th rowspan=2>No<th rowspan=2>Pos<th rowspan=2>Poin<th rowspan=2>Rate<th colspan=7>Attack
<th colspan=5>Blocking<th colspan=3>Serve<th colspan=4>Dig<th colspan=4>Recieve<th colspan=3>Set<th rowspan=2>Error<th rowspan=2>Point<br>Margin
<tr><th>t<th>s<th>f<th>e<th>gp(%)<th>ba<th>eff %
<th>t<th>s<th>b<th>f<th>e
<th>t<th>s<th>e
<th>t<th>s<th>f<th>e
<th>t<th>s<th>f<th>p(%)
<th>t<th>s<th>e";
for($i=0;$i<$jumlaha;$i++){
  $pNum=$awayrec[$i]['pNum'];
  $pName=$awayrec[$i]['pName'];
  $pCode=$awayrec[$i]['pCode'];
  $namaa=$player[$pCode];
  if($namaa ==""){$namanya=$pName;}else{$namanya=$namaa;}
  $position=$awayrec[$i]['position'];
  $point=$awayrec[$i]['point'];$apoint=$apoint+$point;
  $atsp=$awayrec[$i]['atsp'];
  $attack=$awayrec[$i]['ats'];$ateamattack=$ateamattack+$attack;
  $atf=$awayrec[$i]['atf'];$ateamatf=$ateamatf+$atf;
  $att=$awayrec[$i]['att'];$ateamatt=$ateamatt+$att;
  $ate=$awayrec[$i]['ate'];$aate=$aate+$ate;
  $atgp=$awayrec[$i]['atgp'];
  $bas=$awayrec[$i]['bas'];$abas=$abas+$bas;
  $block=$awayrec[$i]['bs'];$ateamblock=$ateamblock+$block;
  $bt=$awayrec[$i]['bt'];$abt=$abt+$bt;
  $blkvb=$awayrec[$i]['blkvb'];$ateamsoft=$ateamsoft+$blkvb;
  $bf=$awayrec[$i]['bf'];$abf=$abf+$bf;
  $blke=$awayrec[$i]['blke'];$ablke=$ablke+$blke;
  $ace=$awayrec[$i]['ss'];$ateamace=$ateamace+$ace;
  $st=$awayrec[$i]['st'];$ast=$ast+$st;
  $se=$awayrec[$i]['se'];$ase=$ase+$se;
  $ssp=$awayrec[$i]['ssp'];$assp=$assp+$ssp;
  $nama=$awayrec[$i]['pCode'];
  $dt=$awayrec[$i]['dt'];$adt=$adt+$dt;
  $ds=$awayrec[$i]['ds'];$ads=$ads+$ds;
  $df=$awayrec[$i]['df'];$adf=$adf+$df;
  $de=$awayrec[$i]['de'];$ade=$ade+$de;
  $rt=$awayrec[$i]['rt'];$art=$art+$rt;
  $rs=$awayrec[$i]['rs'];$ars=$ars+$rs;
  $rf=$awayrec[$i]['rf'];$arf=$arf+$rf;
  $rsp=$awayrec[$i]['rsp'];
  $sett=$awayrec[$i]['sett'];$asett=$asett+$sett;
  $sets=$awayrec[$i]['sets'];$asets=$asets+$sets;
  $sete=$awayrec[$i]['sete'];$asete=$asete+$sete;
  
  $error=$awayrec[$i]['err'];$ateamerror=$ateamerror+$error;
  $tot=$point - $atf - $rf - $error;
  if($atsp > 0){$effp=number_format((($attack - $atf - $ate)/$att)*100,2);}else {$effp=0;}
  
  echo "<tr";
  if ($i % 2 == 0) {echo ' bgcolor=#fff9c4';}
  echo ">";
    echo "<td style='text-align:left'>$namanya<td>$pNum<td>$position<td><b class=blue>$point<td>$atsp%<td>$att<td><b><b class=blue>$attack<td>$atf<td><b class=red>$ate<td>$atgp<td>$bas<td>$effp<td>$bt<td><b class=blue>$block<td>$blkvb<td>$bf<td><b class=red>$blke<td>$st<td><b class=blue>$ace<td><b class=red>$se<td>$dt<td>$ds<td>$df<td><b class=red>$de<td>$rt<td>$rs<td><b class=red>$rf<td>$rsp<td>$sett<td>$sets<td><b class=red>$sete<td><b class=red>$error<td>$tot\n";
//  if ($i!==($jumlaha-1)){echo "<br>";}
}
echo "<tr bgcolor=#99f9c4><td style='text-align:left'>TOTAL<td><td><td><b class=blue>$apoint<td><td>$ateamatt<td><b><b class=blue>$ateamattack<td>$ateamatf<td><b class=red>$aate<td><td>$abas<td><td>$abt<td><b class=blue>$ateamblock<td>$ateamsoft<td>$abf<td><b class=red>$ablke<td>$ast<td><b class=blue>$ateamace<td><b class=red>$ase<td>$adt<td>$ads<td>$adf<td><b class=red>$ade<td>$art<td>$ars<td><b class=red>$arf<td><td>$asett<td>$asets<td><b class=red>$asete<td><b class=red>$ateamerror<td></tr>\n";
echo "</table></table><p>";
echo $team[$home]." : "."Att $hteamattack, Blk $hteamblock, Ace $hteamace, Err $hteamerror || ";
echo $team[$away]." : "."Att $ateamattack, Blk $ateamblock, Ace $ateamace, Err $ateamerror <br>";

//var_dump($json);

$homerec=$json['result']['home']['playerRecord'];
//var_dump($json2);

$show1= "$team[$home] : ";
$show2= "$team[$home] : ";
for($i=0;$i<3;$i++){
  $pNum=$homerec[$i]['pNum'];
  $pName=$homerec[$i]['pName'];
  $position=$homerec[$i]['position'];
  $point=$homerec[$i]['point'];
  $atsp=$homerec[$i]['atsp'];
  $pCode=$homerec[$i]['pCode'];
  $namaa=$player[$pCode];
  if($namaa ==""){$namanya=$pName;}else{$namanya=$namaa;}
  $show1 .="$pNum($position) $point poin($atsp%)";
  $show2 .="$namanya $point ($atsp%)";
  if ($i!==2){$show1 .=", ";$show2 .=", ";}
}
$show1 .= " ||  ";
$show2 .= " ||  ";
$awayrec=$json['result']['away']['playerRecord'];
$show1 .= "$team[$away]: ";
$show2 .= "$team[$away]: ";
for($i=0;$i<3;$i++){
  $pNum=$awayrec[$i]['pNum'];
  $pName=$awayrec[$i]['pName'];
  $position=$awayrec[$i]['position'];
  $point=$awayrec[$i]['point'];
  $atsp=$awayrec[$i]['atsp'];
  $pCode=$awayrec[$i]['pCode'];
  $namaa=$player[$pCode];
  if($namaa ==""){$namanya=$pName;}else{$namanya=$namaa;}
  $show1 .="$pNum($position) $point poin($atsp%)";
  $show2 .="$namanya $point ($atsp%)";
  if ($i!==2){$show1 .=", ";$show2 .=", ";}
}
echo "$show2<p>";
//echo "<p>$show1";
//echo "Soft Block: <br";
echo "<b>Note:<br>Point Margin = point - atf - rf - error<br>eff% = attack efficiency = ((ats - atf - ate)/att) x 100<br>gp% = attack share = (player attack try / team attack try) x 100</b><p><pre>";
//echo $team[$home]." : "."$hteamsoft || ";
//echo $team[$away]." : "."$ateamsoft <p><pre>";
//print_r($json['result']['home']['achievement']);
//var_dump($json['result']['away']['achievement']);


function curlget($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = [
'Accept: application/json',
'Accept-Language: en-US,en;q=0.9,ko;q=0.8,id;q=0.7',
'Connection: keep-alive',
'Origin: https://kovo.co.kr',
'Referer: https://kovo.co.kr/',
'Sec-Fetch-Dest: empty',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-site',
'Sec-GPC: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36',
'sec-ch-ua: "Brave";v="129", "Not=A?Brand";v="8", "Chromium";v="129"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
$data=curl_exec($ch);
curl_close($ch);
return $data;
}
