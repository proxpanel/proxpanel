ProxPanel
=========

The start of a potentially decent open source vps control panel. Think SolusVM, ProxCP, etc, but with the ability to be downloaded, setup, and used by anyone - even add new features and tweaks yourself.

Goal
----

The goal is to create a panel that doesn't care about the backend. Originally, it was intended to be just Proxmox for simplicity, but the goals changed to instead have "adapters" or "providers" - classes which implement a base implementation of an interface and provide methods to create, start, stop, and any other actions that may be needed with a virtual server. 

Migrations should be supported seamlessly between nodes, for any type, even across different providers if possible/compatible (Proxmox -> Libvirt if using a compatible disk format, etc)

Ease of Deployment
------------------

Deploying panels is a pain, maintaining them even more so. Docker images, Debian, RPM packages, and direct source should be easily used and supported.

The only requirements for extra software should be Redis (Caching/Queued Job Storage), MariaDB/MySQL (Database), and PHP (Laravel, Web + Queue Worker). Node side will be packaged in a deb/rpm or simple self-contained binary with minimal requirements (libvirt-dev or similar).

Proxmox
-------

The panel will interact directly with each node's Proxmox API on port 8006.

Libvirt
-------

Libvirt will be used via a Go-based API, run directly on the node for interfacing.

Console
-------

Direct VNC and Serial should be supported. VNC will use a proxy (libvirt supports websockets) and noVNC, with an optimal path to not rely on the panel server to proxy it. Should be distributed and able to be run as a standalone "console proxy" service in each location.
