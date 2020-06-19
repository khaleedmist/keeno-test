<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('products')->insert(array(
		    // fashion start
			array(
			   'title' => 'Kurti with SHARARA LAHNGA (Pre Order)',
			   'description' => 'FABRIC DETAILS:
								VALENTINE Special Launching
								VALENTINE,VOL-1 kurti with SHARARA LAHNGA
								Top : Pure 14 kg REYON PRINT WITH FOIL
								(Full stiched LENGTH :-45+)
								SHARARA LAHNGA : CAMBRIC MAL COTTON WITH FULL INNER WITH FULL FLAIR 3 mtr
								Length 40+
								Size : L, Xl, Xxl
								Note: Color May Vary Slightly Due To Photography And Display Strictly No Exchange Or Return For Color Variations Unpacking Video Must For Any Sort Of Complaint',
			   'image_url' => 'https://keeno.app/product/image/37/thumb###https://keeno.app/storage/82/2020_02_02_11_26_5e365d7a15b12_upload.png|||https://keeno.app/product/image-id/37/84/80/100###https://keeno.app/storage/84/2020_02_02_11_26_5e365d984df50_upload.png|||https://keeno.app/product/image-id/37/85/80/100###https://keeno.app/storage/85/2020_02_02_11_27_5e365da60873b_upload.png',
			   'is_featured' => 1,
			   'category_id' => 1,
			   'price' => 2170.00,
			   'rating' => 4.5,
			 ),
			 
			 array(
			   'title' => 'Envy perfume for Men',
			   'description' => 'Quantity: 60ml; Item Form: Spray
								This deo-spray is a perfect all time wear for all the rough men
								It protects you from the odor causing germs
								This perfume is an ideal gift for your loved ones
								Usage: Hold the bottle upright. Spray 15 cm away from the skin. Avoid eye contact
								Target Audience: Men
								Package Contents: 1 Perfume',
			   'image_url' => 'https://keeno.app/product/image/183/thumb###https://keeno.app/storage/474/2020_03_26_10_45_5e7c337fbe821_upload.png',
			   'is_featured' => 0,
			   'category_id' => 1,
			   'price' => 450.00,
			   'rating' => 4.0,
			 ),
			 
			 array(
			   'title' => 'MEGIR Chronograph Mens Sport Watch Model Number: 2097',
			   'description' => 'You will be amazed by our product quality
								100% authentic and original

								for video please checkout this
								link : https://www.facebook.com/TIMESession/videos/689878231422171/
								Product description
								MEGIR Chronograph Mens Sport Watch
								Model Number: 2097

								Brand Name: MEGIR
								Style: Sport
								Movement: QUARTZ
								Clasp Type: Buckle
								Water Resistance Depth: 3Bar
								Case Material: Alloy
								Band Length: 23cm
								Case Thickness: 14.5mm
								Band Width: 24mmCase
								Shape: Round
								Item Type: Quartz Wristwatches
								Boxes & Cases Material: Paper
								Band Material Type: Silicone
								Feature: Complete Calendar
								Feature: Water Resistant
								Feature: Stop Watch
								Feature: Chronograph
								Dial Diameter: 46mmDial
								Window Material Type: Hardlex
								Model Number: 2097
								Color: Red, white
								Style: Fashion, sport, causal
								Band: silicone
								Item: Men
								WatchType: Quartz watch
								Function: Chronograph, date, time
								Feature 1: reloj hombre
								Feature 2: Relogio Masculino
								Feature 3: Military Watches
								Feature 4: Sport watch',
			   'image_url' => 'https://keeno.app/product/image/66/thumb###https://keeno.app/storage/169/2020_02_22_14_06_5e50e0e9e7891_upload.png',
			   'is_featured' => 0,
			   'category_id' => 1,
			   'price' => 1800.00,
			   'rating' => 5.0,
			 ),
			 // fashion end
			 // electronics start 
			 array(
			   'title' => 'HP 840 G5 7th Gen C-i5 SSD 256 Ram 8gb F-HD',
			   'description' => 'This Laptop only 30 Days Used..Brand New Boxed Condition....
									Product Details :
									 - HP EleteBook 840 G5
									 - 256 SSD+ 8GB Ram (super performance)
									 - Core i5-7400u (7th Generation)
									 - Business Class',
			   'image_url' => 'https://keeno.app/product/image/123/thumb###https://keeno.app/storage/374/2020_03_01_15_55_5e5b867bf40d9_upload.png|||https://keeno.app/product/image-id/123/375/80/100###https://keeno.app/storage/375/2020_03_01_15_55_5e5b868cf0870_upload.png',
			   'is_featured' => 1,
			   'category_id' => 2,
			   'price' => 47900.00 ,
			   'rating' => 4.5,
			 ),
			 
			 array(
			   'title' => 'Desktop Core 3 1000GB & 4GB + 19 inch LED',
			   'description' => 'Condition: New
								Brand: Intel
								Model: 641bt
								Description
							    Processor Type: Core 3 |Super P4 3.00 GHz
								Graphics : Intel {R} HD AGP Card Built In
								Motherboard: DDR 2 Version Asus Or
								Ram Memory: 4GB > {DDR-2}
								Rom Memory: 1000 GB > {sata}
								Power Box: ATX 24 Pin > {500w}
								CPU Casing: Any Brand & sTyLe It
								Others Etc: Total Cables & Driver Disk
								Dell 20" LED Colour spot Monitor',
			   'image_url' => 'https://keeno.app/product/image/1416/thumb###https://keeno.app/storage/2096/2020_06_13_10_22_5ee454952ecf1_upload.png',
			   'is_featured' => 0,
			   'category_id' => 2,
			   'price' => 69000.00,
			   'rating' => 5.0,
			 ),
			 
			// electronics end
			
			// food start 
			array(
			   'title' => 'Black Forest Cake (Home Made)',
			   'description' => 'Black Forest cake
								1kg price - 1200 TK
								500gm - 650 TK
								Call for order',
			   'image_url' => 'https://keeno.app/product/image/25/thumb###https://keeno.app/storage/54/2020_01_26_22_08_5e2db975e78de_upload.png',
			   'is_featured' => 1,
			   'category_id' => 3,
			   'price' => 1200.00,
			   'rating' => 5.0,
			 ),
			 
			 array(
			   'title' => 'Organic Apple Cider Vinegar',
			   'description' => 'Brand: Bragg
								Origin : U.S.A
								Weight: 946 ML
								Home delivery by courier service',
			   'image_url' => 'https://keeno.app/product/image/23/thumb###https://keeno.app/storage/51/2020_01_26_20_08_5e2d9d682e6aa_upload.png',
			   'is_featured' => 0,
			   'category_id' => 3,
			   'price' => 1200.00,
			   'rating' => 4.5,
			 ),
			 
			 // food end

			// sports start 
			 
			 array(
			   'title' => 'Cricket Kit Set for Junior - Size 6',
			   'description' => 'Product Details
								 Thrax Neo 11 English Willow Bat Thrax Club Batting Gloves Thrax Neo 11 Batting Pads Thrax Duffle kit bag Thrax cricket helmet Thrax Thigh guard',
			   'image_url' => 'https://keeno.app/product/image/275/thumb###https://keeno.app/storage/588/2020_04_03_01_09_5e86385349076_upload.png',
			   'is_featured' => 1,
			   'category_id' => 4,
			   'price' => 10500.00,
			   'rating' => 3.5,
			 ),
			 array(
			   'title' => 'Assassin Series Football Boot for Man BLUE',
			   'description' => 'Lime Assassin Series Football Boot
									Country of Origin: China
									Type: Soccer Shoes
									Gender: Men
									Upper Material: PU
									Lining Material: PU
									Insole Material: TPR
									Out-sole Material: Rubber',
			   'image_url' => 'https://keeno.app/product/image/1014/thumb###https://keeno.app/storage/1517/2020_04_27_22_30_5ea7089e7cf11_upload.png',
			   'is_featured' => 0,
			   'category_id' => 4,
			   'price' => 3700.00,
			   'rating' => 5.0,
			 ),
			 
			 // sports end
			 
			 // books start 
			 array(
			   'title' => 'Professional Graphic Design',
			   'description' => 'Dhaka Solution-এ
								প্রফেশনাল অনলাইন আউট সোর্সিং কোর্সএ ভর্তি চলছে,,,
								গ্রাফিক ডিজাইন হল ভিজ্যুয়াল যোগাযোগের প্রক্রিয়া, এবং টাইপোগ্রাফি, স্থান, চিত্র এবং রঙের সঠিক ব্যবহারের মাধ্যমে সমস্যা সমাধানের ক্ষেত্র
								ক্ষেত্রটি ভিজ্যুয়াল যোগাযোগ এবং যোগাযোগের নকশার একটি উপসেট হিসাবে বিবেচিত হয়, তবে কখনও কখনও "গ্রাফিক ডিজাইন" শব্দটি পরস্পর পরিবর্তিতভাবে ব্যবহৃত হয় এর সাথে জড়িত ওভারল্যাপিং দক্ষতার কারণে।
								আমরা গ্রাফিক ডিজাইন কোর্সগুলি তৈরি করতে এই সরঞ্জামগুলি ব্যবহার করি:
								• MS Power Point 2010 and 2013
								• Adobe Photoshop CS6 - CC Version
								• Adobe Illustrator CS6 - CC Version
								• Adobe InDesign CS3 - CC Version
								• Adobe Flash CS3 - CC Version
								কোর্সের মেয়াদ : ০3 Month
								কোর্স ফী মাত্র 12500টাকা
								আপনি যদি এই কোর্সটি শিখতে আগ্রহী হন,
								আমাদের সাথে যোগাযোগ করুন
								call: 01976565765
								87 BNS Center Level 10 suite 1027 sector 7 Uttara Dhaka 1230',
			   'image_url' => 'https://keeno.app/product/image/51/thumb###https://keeno.app/storage/111/2020_02_13_18_11_5e453ce9aba45_upload.png',
			   'is_featured' => 1,
			   'category_id' => 5,
			   'price' => 12500.00 ,
			   'rating' => 2.5,
			 ),
			 array(
			   'title' => 'Facebook Marketing',
			   'description' => 'বুস্ট করছেন কিন্তু সেল পাচ্ছেন না !! আপনার অনলাইন শপ বন্ধ করে দেয়ার কথা ভাবছেন !! আপনার এই সকল সমস্যার সমাধান নিয়ে আমরা এসেছি। অ্যাডভান্স লেভেল ফেসবুক বুস্ট সার্ভিস l যা কিনা দেবে আপনার সকল সমস্যার সমাধান।
								একমাত্র আমরাই দিচ্ছি অ্যাডভান্স লেভেল পেজ পোস্ট Boosting সার্ভিস।
								Call :01976565765
								Dhaka Solution
								আপনি ইচ্ছা করলে সরাসরি অফিস এসে সার্ভিস নিতে পারবেন,
								Office : 87 BNS center,level 10,room no-1027,Sector 7,Uttara,Dhaka-1230',
			   'image_url' => 'https://keeno.app/product/image/68/thumb###https://keeno.app/storage/174/2020_02_22_16_21_5e51008f92482_upload.png',
			   'is_featured' => 0,
			   'category_id' => 5,
			   'price' => 2000.00,
			   'rating' => 1.5,
			 ),
			 
			 // books end
			 
			 // furniture start 
			 array(
			   'title' => 'Office Chair Model CL-2B',
			   'description' => 'Executive Office Chair Model: CL-2B
								Our showroom in Dhaka malibag chowdhry para
								Curiar er maddome product nite parben  
								Curiar charge 400-500 taka',
			   'image_url' => 'https://keeno.app/product/image/1354/thumb###https://keeno.app/storage/2007/2020_06_05_14_11_5ed9fe4b5e905_upload.png',
			   'is_featured' => 0,
			   'category_id' => 6,
			   'price' => 7500.00,
			   'rating' => 2.5,
			 ),
			 array(
			   'title' => 'Wood Processing Sofa Sets',
			   'description' => 'ফ্রী হোম ডেলিভারি এবং ১০ বছরের ওয়ারেন্টি সার্ভিস সহ ফার্নিচার ডিলাক্স নিয়ে এলো সম্পূর্ণ কাঠের তৈরি অত্যাধুনিক ডিজাইনের সকল প্রকার ঘরোয়া আসবাবপত্র। "যার গুনগত মান রক্ষার্থে আমরা প্রতিশ্রুতিবদ্ধ। কাস্টমারদের পছন্দ অনুযায়ী ফার্নিচারের "সাইজ,কাঠ ও কালার দেয়া যাবে। ২ সপ্তাহের মধ্যে বাংলাদেশের যেকোনো প্রান্তে ডেলিভারী করে থাকি। ঢাকা, গাজীপুর, সাভার ও আশুলিয়ায় হোম ডেলিভারি ফ্রী। দেশের অন্যত্র ডেলিভারি চার্জ আলোচনা সাপেক্ষে নেয়া হয়। * আমাদের পন্য কিনুন এবং যাচাই করুন * বিস্তারিত জানতে অথবা অর্ডার করতে 01700944551 অথবা, 01300918113 নাম্বারে অথবা মেসেঞ্জারে Message করুন। অতঃপর আমরাই আপনার সাথে যোগাযোগ করবো। অর্ডারের ক্ষেত্রে আপনার "নাম,ফোন নম্বর ও বিস্তারিত ঠিকানা লিখে মেসেজ করতে হবে।',
			   'image_url' => 'https://keeno.app/product/image/801/thumb###https://keeno.app/storage/1248/2020_04_20_22_51_5e9dd31ad3104_upload.png',
			   'is_featured' => 1,
			   'category_id' => 6,
			   'price' => 23000.00,
			   'rating' => 3.5,
			 ),
			 
			 // furniture end

			 // automotive start
			 
			 array(
			   'title' => 'Cafe Racer Cadwell 2020',
			   'description' => 'যারা একটু ভিন্ন টাইপের বাইক কিনতে চাচ্ছেন বাইকটি শুধু তাদের জন্যই 
									*  চরম স্টাইলিশ বাইকটি অন্যান্য বাইক থেকে অনেকটাই আলাদা। এবং আমাদের শোরুম এ চলছে দারুন অফার নতুন বছর উপলক্ষে।
									* আমাদের কাছে পাবেন আপনার পছন্দের সব বাইক কালেকশন ।
									* দুর্দান্ত ও চমৎকার একটা বাইক
									* বডিতে কোন প্রকার দাগ নেই 
									* বাইকে কোন প্রকার সমস্যা নেই 
									* একদম ফ্রেশ বাইক 
								বন্ধুরা আপনার পছন্দের মটরসাইকেলটি কিনতে আজই শোরুমে চলে আসুন
								Address:
								প্রিন্স ওয়ার্ল্ডজ়
								শোরুম ১:
								৩২৩ মগবাজার মোর মসজিদ সংলগ্ন,"রাজ্জাক প্লাজার ও ফকরুদ্দিন এর বিপরীত এ',
			   'image_url' => 'https://keeno.app/product/image/20/thumb###https://keeno.app/storage/43/2020_01_26_00_47_5e2c8d2914f64_upload.png',
			   'is_featured' => 1,
			   'category_id' => 7,
			   'price' => 2650.00,
			   'rating' => 4.5,
			 ),
			 array(
			   'title' => 'Nissan Sunny Ex Saloon 2006',
			   'description' => 'Its my personal Used car,we buy new car from showroom,very good condition right now ,there is no problem in this car,Fully automatic,Engine is full ok,8 month before covert CNG,Auto key lock,Ac is very cooled ,therr is no work right now ,for my personal problem I just want sell this car,only real buyer contact me.
								Brand: Nissan
								Model: Sunny
								Trim / Edition: Ex saloon
								Model year: 2006
								Registration year: 2006
								Condition: Used
								Transmission: Automatic
								Fuel type: Petrol, Octane
								Engine capacity: 1,330 cc Kilometers run: 65,549 km',
			   'image_url' => 'https://keeno.app/product/image/22/thumb###https://keeno.app/storage/45/2020_01_26_01_02_5e2c90b3aa2ae_upload.png',
			   'is_featured' => 0,
			   'category_id' => 7,
			   'price' => 645000.00,
			   'rating' => 3.5,
			 ),
			 
			  // automotive end			
		));
    }
}
