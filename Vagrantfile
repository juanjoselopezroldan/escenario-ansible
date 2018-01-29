# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.define :nodo1 do |nodo1|
    nodo1.vm.box = "debian/stretch64"
    nodo1.vm.hostname = "nodo1"
    nodo1.vm.network :private_network, ip: "192.168.100.1", netmask: "255.255.255.0",
	virtualbox__intnet: "redinterna"
    nodo1.vm.provision "ansible" do |ansible|
	ansible.playbook = "play/pnodo1.yml"
   end

 config.vm.define :nodo2 do |nodo2|
   nodo2.vm.box = "debian/stretch64"
    nodo2.vm.hostname = "nodo2"
    nodo2.vm.network :private_network, ip: "192.168.100.10", netmask: "255.255.255.0",
        virtualbox__intnet: "redinterna"
    nodo2.vm.provision "ansible" do |ansible|
        ansible.playbook = "play/pnodo2.yml"
     end
end

