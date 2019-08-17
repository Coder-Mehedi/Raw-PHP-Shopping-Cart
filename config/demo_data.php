<?php 

include_once 'db_connect.php';

$sql = "INSERT INTO product_info(id, name, price, image) VALUE
(1,'Acer Aspire 5 A515-52G 8th Gen Intel Core i5 8265U (1.6GHz-3.9GHz, 8GB, 2TB) nVidia MX230 2GB Graphics, 15.6 Inch FHD (1920x1080) Display, Free DOS, Sparkly Silver Notebook #NX.HD6SI.001',66000, 'product_images/1.png'),
(2, 'Acer Predator Helios 300 PH315-51 8th Gen Intel Core i7 8750H (2.2GHz-4.1GHz. 8GB, 128GB SSD + 1TB HDD) nVidia GTX1050Ti 4GB GDDR5 Graphcis, 15.6 Inch FHD (1920x1080) Display, Free DOS, Black Gaming Notebook #NH.Q3HSI.016',115000, 'product_images/2.png'),
(3, 'Acer Predator Triton 715-51 75FT 7th Gen Intel Core i7 7700HQ (2.8-3.8GHz, 16GB DDR4, 256GB+256GB PCIe SSD-RAID) 8GB NVIDIA Geforce GTX 1080 Graphics, 15.6 Inch FHD IPS 120Hz Display, Win-10 Home, Backlit Keyboard, Blue Gaming Notebook #NH.Q2LSI.003', 305000, 'product_images/3.png'),
(4, 'MSI GE63 Raider RGB 9SF 9th Gen Intel Core i7 9750H (2.60GHz-4.50GHz, Intel HM370 Chipset, 16GB (2x8GB) DDR4 2666MHz, 512GB SSD + 1TB HDD NVIDIA RTX 2070 8GB GDDR6 Graphics, 15.6 Inch FHD (1920x1080) 144Hz Display, Win 10, Black Gaming Notebook with Air G', 208000, 'product_images/4.png')
";

mysqli_query($conn, $sql);