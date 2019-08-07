CREATE TABLE `organization_info` (
  `org_name` varchar(11) NOT NULL,
  `org_owner` varchar(11) NOT NULL
);

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first` varchar(11) NOT NULL,
  `user_last` varchar(11) NOT NULL,
  `user_idn` int(11) NOT NULL,
  `user_password` varchar(255) NOT NULL
);
