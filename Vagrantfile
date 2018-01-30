# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.define :nodo1 do |nodo1|
    nodo1.vm.box = "debian/stretch64"
    nodo1.vm.hostname = "nodo1"
    nodo1.ssh.insert_key = false
    nodo1.ssh.private_key_path = ["private_key", "~/.vagrant.d/insecure_private_key"]
    nodo1.vm.provision "file", source: "~/.ssh/id_rsa.pub", destination: "/home/vagrant/.ssh/authorized_keys"
    nodo1.vm.network :private_network, ip: "10.10.10.2"
#    nodo1.vm.provision "ansible" do |ansible|
#	ansible.playbook = "play/pnodo1.yml"
#    end
   end

 config.vm.define :nodo2 do |nodo2|
   nodo2.vm.box = "debian/stretch64"
    nodo2.vm.hostname = "nodo2"
    nodo2.ssh.insert_key = false
    nodo2.ssh.private_key_path = ["private_key", "~/.vagrant.d/insecure_private_key"]
    nodo2.vm.provision "file", source: "~/.ssh/id_rsa.pub", destination: "/home/vagrant/.ssh/authorized_keys"
    nodo2.vm.network :private_network, ip: "10.10.10.3"
    #nodo2.vm.provision "ansible" do |ansible|
    #    ansible.playbook = "play/pnodo2.yml"
    #end
 end
end
