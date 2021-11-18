--
-- Table structure for table `output_images`
--

CREATE TABLE `output_images` (
  `sno` int(20) NOT NULL,
  `emailid` varchar(255) ,
  `user_img_hash` varchar(255) ,
  `imageData` longblob 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `output_images`
--
ALTER TABLE `output_images`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `output_images`
--
ALTER TABLE `output_images`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;
