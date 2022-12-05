#!/bin/sh

service vsftpd start

mkdir -p /var/run/vsftpd/empty
mkdir -p /home/aklaikel
echo $FTP_USR > /etc/vsftpd.userlist
echo ${FTP_USR}:${FTP_PWD} | chpasswd
chown -R ${FTP_USR}:${FTP_USR} /home/"${FTP_USR}"

echo "local_enable=YES" >> /etc/vsftpd.conf;
echo "write_enable=YES" >> /etc/vsftpd.conf;
echo "chroot_local_user=YES" >> /etc/vsftpd.conf;
echo "allow_writeable_chroot=YES" >> /etc/vsftpd.conf;
echo "pasv_enable=YES" >> /etc/vsftpd.conf;
echo "pasv_min_port=21000" >> /etc/vsftpd.conf;
echo "pasv_max_port=21010" >> /etc/vsftpd.conf;
echo "userlist_enable=YES" >> /etc/vsftpd.conf;
echo "userlist_file=/etc/vsftpd.userlist" >> /etc/vsftpd.conf;
echo "userlist_deny=NO" >> /etc/vsftpd.conf;
echo "secure_chroot_dir=/home/$FTP_USR" >> /etc/vsftpd.conf;

service vsftpd stop
/usr/sbin/vsftpd