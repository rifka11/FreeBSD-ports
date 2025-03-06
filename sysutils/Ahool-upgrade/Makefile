# $FreeBSD$

PORTNAME=	Ahool-upgrade
PORTVERSION=	1.0
PORTREVISION=	29
CATEGORIES=	sysutils
MASTER_SITES=	# empty
DISTFILES=	# empty
EXTRACT_ONLY=	# empty

MAINTAINER=	coreteam@ahool.org
COMMENT=	Ahool upgrade script

LICENSE=	APACHE20

NO_MTREE=	yes
NO_BUILD=	yes

PLIST_FILES=	libexec/Ahool-upgrade \
		sbin/Ahool-upgrade

do-extract:
	@${MKDIR} ${WRKSRC}
	${CP} -r ${FILESDIR}/* ${WRKSRC}

do-install:
	${MKDIR} ${STAGEDIR}${PREFIX}/sbin
	${MKDIR} ${STAGEDIR}${PREFIX}/libexec
	${MKDIR} ${STAGEDIR}${PREFIX}/share/Ahool
	${INSTALL_SCRIPT} ${WRKSRC}/Ahool-upgrade \
		${STAGEDIR}${PREFIX}/libexec
	${INSTALL_SCRIPT} ${WRKSRC}/Ahool-upgrade.wrapper \
		${STAGEDIR}${PREFIX}/sbin/Ahool-upgrade

.include <bsd.port.mk>
