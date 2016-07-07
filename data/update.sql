ALTER TABLE `offer` ADD `date` DATE NOT NULL AFTER `fields`, ADD `state` INT(4) NOT NULL DEFAULT '1' AFTER `date`;

CREATE TABLE `offer_communication` (
  `offer_communication_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `send_datetime` datetime NOT NULL,
  `is_notified` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offer_communication`
--
ALTER TABLE `offer_communication`
  ADD PRIMARY KEY (`offer_communication_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer_communication`
--
ALTER TABLE `offer_communication`
  MODIFY `offer_communication_id` int(11) NOT NULL AUTO_INCREMENT;
